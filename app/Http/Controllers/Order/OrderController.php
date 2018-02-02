<?php

namespace App\Http\Controllers\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use DB;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\BaseController;


class OrderController extends BaseController
{
    public $orderStatus = [
        '1' => '订单未付款',
        '2' => '订单未审核',
        '3' => '订单审核中',
        '4' => '审核已通过',
        '5' => '订单驳回',
        '6' => '订单已确认',
        '7' => '合同已上传',
        '8' => '订单已完成',
        '9' => '订单取消'
    ];
    //添加订单
    public function orderAdd($house_no){
        $uid = Session::get('userId');
        if(!empty($uid)){
            $houseInfo = DB::table('house_message')->where('serial_number', $house_no)->first();

            //计算订金并返回
            $v = json_decode(json_encode($houseInfo), true);
            $pay_amount = (int)'';
            if(!empty($v['payment_proportion'])){
                $money1 = (int)substr($v['payment_proportion'], 0);
                $money2 = (int)substr($v['payment_proportion'], 2);
                $pay_amount = (int)($money1*$v['house_price']+$money2*$v['house_price'])*8.98;
            }
            //房型
            if(!empty($v['house_structure'])){
                $num1 = (int)substr($v['house_structure'], 0);
                $num2 = (int)substr($v['house_structure'], 2);
                $house_structure = $num1.'室'.$num2.'厅';
            }

            $pic = DB::table('house_image')->where('house_msg_id', $v['msgid'])->get();
            $pic = json_decode(json_encode($pic[0]), true);
            $house_img = $pic["house_imagename"];

            return view("Order/orderAdd", [
                'result'          => $houseInfo,
                'payment_amount'  => $pay_amount,
                'house_img'       => $house_img,
                'house_structure' => $house_structure,
                'uid'             => $uid
            ]);
        } else{
            return redirect("user/login");
        }
    }

    //提交订单
    public function orderSave(Request $request)
    {
        $data = Input::all();
        $file1 = $request->file('pic1');//身份证1
        $file2 = $request->file('pic11');//身份证2
        $file3 = $request->file('pic2');//护照
        $file4 = $request->file('pic3');//学生证
        $time = time();
        $order_no = 'lemonTea'.$time.$_REQUEST['house_no'];//中介唯一标识码+时间+房源编号
        $uid = Session::get('userId');
        //订单信息
        $order_data = [
            'uid'              => $uid,
            'order_no'         => $order_no,
            'creat_time'       => $time,
            'house_id'         => $data['house_id'],
            'tel'              => $data['tel'],
            'name'             => $data['name'],
            'order_remark'     => $data['order_remark'],
            'order_status'     => 1,
            //'payment_type'   => 'crush',
            'payment_amount'   => $data['payment_amount'],
            //'payment_time'   => 'crush',
            //'payment_amount' => 'crush',
            //'payment_time'   => 'crush',
            'rent_time'        => $data['rent_time'],
            'sign_time'        => strtotime($data['sign_time']),
            'stime'            => strtotime($data['stime'])
        ];

        //租客信息
            $renter = [
                'fname'        => $data['fname'],
                'lname'        => $data['lname'],
                'email'        => $data['email'],
                'tel'          => $data['tel'],
                'name'         => $data['name'],
                'wechat'       => $data['wechat'],
                'qq'           => $data['qq'],
                'university'   => $data['university'],
                'course'       => $data['course'],
                'dob'          => strtotime($data['dob']),
                'nationality'  => $data['nationality'],
                'address'      => $data['address'],
                'postcode'     => $data['postcode'],
                'r_name'       => $data['r_name'],
                'relationship' => $data['relationship'],
                'r_tel'        => $data['r_tel'],
                'gender'       => $data['gender'],
                'order_no'     => $order_no
            ];

            //身份证正面
            if(!empty($file1)){
                $renter_idcard1 = $file1->store('','uploads');
                $renter['renter_idcard1'] = $renter_idcard1;
            }
            //身份证反面
            if(!empty($file2)){
                $renter_idcard2 = $file2->store('','uploads');
                $renter['renter_idcard2'] = $renter_idcard2;
            }
            //护照
            if(!empty($file3)){
                $renter_passport = $file3->store('','uploads');
                $renter['renter_passport'] = $renter_passport;
            }
            //学生证
            if(!empty($file4)){
                $renter_stucard = $file4->store('','uploads');
                $renter['stu_idcard'] = $renter_stucard;
            }

            $result = DB::table('order')->insert($order_data);
            $insert = DB::table('renter')->insert($renter);
            if($result && $insert){
                $order_id = DB::table('order')->where('order_no', $order_no)->value('id');
                $result = DB::table('order')->where('id',$order_id)->join('house_message', 'house_message.msgid', '=', 'order.house_id')->first();
                return view('order.pay',['result'=>$result]);
            }
    }

    //付款页面

    public function pay($order_id){
        $result = DB::table('order')->where('id',$order_id)->join('house_message', 'house_message.msgid', '=', 'order.house_id')->first();
        return view('order.pay',['result'=>$result]);
    }

    //付款成功
    public function payoff($order_id){
        $req = DB::table('order')->where('id',$order_id)->update(['order_status'=>2]);
        /*if($req){*/
            return view('order.payoff',['order_id'=>$order_id]);
        /*}*/
    }

    //订单列表
    public function orderList()
    {
        $uid = Session::get('userId');
        $data = DB::table('order')->where('uid',$uid)->get();
        $orderStatus = DB::table('order_status')->get();
        foreach($data as $v){

            //将stdClass对象转换为数组
            $v = json_decode(json_encode($v), true);
            $t = time();
            if($v['order_status'] == '1'){
                if($t-$v['creat_time']>=180000){
                    DB::table('order')->where('id', $v['id'])->update(['order_status' => '9']);
                }
            }
        }

        $result = DB::table('order')->where('uid',$uid)->join('house_message', 'house_message.msgid', '=', 'order.house_id')->orderby('creat_time', 'desc')->paginate(3);
        return view('order.orderList',['result'=>$result,'orderStatus'=>$this->orderStatus,'order_status'=>$orderStatus,'h_img'=>new Order()]);
    }

    //我的房源
    public function myHouse()
    {
        $uid = Session::get('userId');
        $data = DB::table('order')->where('uid',$uid)->get();
        $orderStatus = DB::table('order_status')->get();
        foreach($data as $v){

            //将stdClass对象转换为数组
            $v = json_decode(json_encode($v), true);
            $t = time();
            if($v['order_status'] == '1'){
                if($t-$v['creat_time']>=180000){
                    DB::table('order')->where('id', $v['id'])->update(['order_status' => '9']);
                }
            }
        }
        $result = DB::table('order')->where('uid',$uid)->where('order_status','8')->join('house_message', 'house_message.msgid', '=', 'order.house_id')->orderby('creat_time', 'desc')->paginate(3);
        return view('order.myHouse',['result'=>$result,'orderStatus'=>$this->orderStatus,'order_status'=>$orderStatus,'h_img'=>new Order()]);
    }



    //查看订单详情
    public function orderDetail($order_id,$ac)
    {
        $order_no = DB::table('order')->where('id',$order_id)->value('order_no');
        if($ac == 'look'){
            $renter = DB::table('order')->where('order.order_no', $order_no)->join('renter','renter.order_no','=','order.order_no')->first();
            $result = DB::table('order')->where('id', $order_id)->join('house_message', 'house_message.msgid', '=', 'order.house_id')->first();
            //提取一张图片
            $v =  json_decode( json_encode( $result),true); //转成数组
            $pic = DB::table('house_image')->where('house_msg_id',$v['house_id'])->get();
            $pic = json_decode( json_encode($pic[0]),true);
            $house_img = $pic["house_imagename"];
            return view('order.orderDetail', ['result' => $result,'renter' => $renter,'house_img' => $house_img, 'orderStatus' => $this->orderStatus]);
        }elseif($ac == 'payok'){
            $up_sta = DB::table('order')->where('id', $order_id)->update(['order_status'=>'2']);
            $renter = DB::table('order')->where('order.order_no', $order_no)->join('renter','renter.order_no','=','order.order_no')->first();
            $result = DB::table('order')->where('id', $order_id)->join('house_message', 'house_message.msgid', '=', 'order.house_id')->first();
            return view('order.orderDetail', ['result' => $result, 'renter' => $renter,'orderStatus' => $this->orderStatus]);
        }

    }

    //取消订单
    public function orderCancel()
    {
        $order_id = $_REQUEST['order_id'];
        $qx_reason = isset($_REQUEST['qx_reason']) && !empty($_REQUEST['qx_reason']) ? $_REQUEST['qx_reason'] : '';
        if($qx_reason == ''){
            $result = DB::table('order')->where('id',$order_id)->update(['order_status'=>'9']);
            if($result){return '1';}else{return '0';}
        }else{
            $re = DB::table('order')->where('id',$order_id)->update(['qx_reason'=>$qx_reason,'order_status'=>'9']);
            if($re){return '1';}else{return '0';}
        }
    }

    //取消订单原因页面弹出
    public function qxReason($order_id)
    {
        return view('order.qxReason',['order_id'=>$order_id]);
    }

    //删除订单
    public function orderDelete()
    {
        $order_id = (int)$_REQUEST['order_id'];
        $order_no = DB::table('order')->where('id',$order_id)->value('order_no');

        $img1 = DB::table('renter')->where('order_no',$order_no)->value('renter_idcard1');
        $img2 = DB::table('renter')->where('order_no',$order_no)->value('renter_idcard2');
        $img3 = DB::table('renter')->where('order_no',$order_no)->value('renter_passport');
        $img4 = DB::table('renter')->where('order_no',$order_no)->value('stu_idcard');
        if(!empty($img1)){@unlink('./uploads/'.$img1);}
        if(!empty($img2)){@unlink('./uploads/'.$img2);}
        if(!empty($img3)){@unlink('./uploads/'.$img3);}
        if(!empty($img4)){@unlink('./uploads/'.$img4);}

        $result = DB::table('order')->where('id',$order_id)->delete();
        $re = DB::table('renter')->where('order_no',$order_no)->delete();
        if($result && $re){return '1';}else{return '0';}
    }

    //二维码
    public function qrcode($order_id)
    {
        return view('order.qrcode',['order_id'=>$order_id]);
    }

}

















