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
    public function orderAdd($house_no)
    {
        $uid = Session::get('userId');
        if(!empty($uid)){
            $houseInfo = DB::table('house_message')->where('serial_number', $house_no)->first();
            return view("Order/orderAdd", ['result' => $houseInfo, 'uid' => $uid]);
        }else{
            return redirect("user/login");
        }
        

    }

    //提交订单
    public function orderSave(Request $request)
    {
       /* var_dump($_REQUEST);
        exit();*/

        $data = Input::all();
        $file1 = $request->file('pic1');//身份证1
        $file11 = $request->file('pic11');//身份证2
        $file2 = $request->file('pic2');//护照
        $file3 = $request->file('pic3');//学生证
        $time = time();
        $order_no = 'zhongjie'.$time.$data['house_no'];
        $uid = Session::get('userId');
        $order_data = [

            'uid'            => $uid,
            'order_no'       => $order_no,
            'creat_time'     => $time,
            'house_id'       => $data['house_id'],
            'tel'            => $data['tel'],
            'name'           => $data['name'],
            'order_remark'   => $data['order_remark'],
            'order_status'   => 1,
            'payment_type'   => 'crush',
            //'payment_amount'   => 'crush',
            //'payment_time'   => 'crush',
            //'payment_amount'   => 'crush',
            //'payment_time'   => 'crush',
            'rent_time'      => $data['rent_time'],
            'sign_time'      => strtotime($data['sign_time']),
        ];
        if(!empty($file1)){
            $renter_idcard1 = $file1->store('','uploads');
            $order_data['renter_idcard1'] = $renter_idcard1;
        }
        if(!empty($file11)){
            $renter_idcard2 = $file11->store('','uploads');
            $order_data['renter_idcard2'] = $renter_idcard2;
        }
        if(!empty($file2)){
            $renter_passport = $file2->store('','uploads');
            $order_data['renter_passport'] = $renter_passport;
        }

        if(!empty($file3)){
            $renter_stucard = $file3->store('','uploads');
            $order_data['stu_idcard'] = $renter_stucard;
        }

        $result = DB::table('order')->insert($order_data);
        if($result){
            $order_id = DB::table('order')->where('order_no', $order_no)->value('order_id');
            return view('order.qrcode',['order_id'=>$order_id]);
        }
    }

    //订单列表
    public function orderList()
    {
        $uid = Session::get('userId');
        $data = DB::table('order')->where('uid',$uid)->get();
        foreach($data as $v){
            //将stdClass对象转换为数组
            $v =  json_decode( json_encode( $v),true);
            $t = time();
            if($v['order_status'] == '1'){
                if($t - $v['creat_time'] >= 1800){
                    DB::table('order')->where('order_id',$v['order_id'])->update(['order_status'=>'9']);
                }
            }
        }
        $result = DB::table('order')->where('uid',$uid)->join('house_message', 'house_message.msgid', '=', 'order.house_id')->paginate(8);
        return view('order.orderList',['result'=>$result, 'orderStatus'=>$this->orderStatus]);
    }

    //查看订单详情
    public function orderDetail($order_id,$ac)
    {
        if($ac == 'look'){
            $result = DB::table('order')->where('order_id', $order_id)->join('house_message', 'house_message.msgid', '=', 'order.house_id')->first();
            return view('order.orderDetail', ['result' => $result, 'orderStatus' => $this->orderStatus]);
        }elseif($ac == 'payok'){
            $up_sta = DB::table('order')->where('order_id', $order_id)->update(['order_status'=>'2']);
            $result = DB::table('order')->where('order_id', $order_id)->join('house_message', 'house_message.msgid', '=', 'order.house_id')->first();
            return view('order.orderDetail', ['result' => $result, 'orderStatus' => $this->orderStatus]);
        }

    }

    //修改订单
    /*public function orderModify($order_id)
    {
        $result = DB::table('order')
            ->where('order_id',$order_id)
            ->join('house_message', 'house_message.msgid', '=', 'order.house_id')
            ->first();
        return view('order.orderModify',['result'=>$result]);
    }*/

    //修改保存
    /*public function orderSaveMod(Request $request)
    {
        $data = Input::all();
        $order_id = (int)$data['order_id'];
        $order_data = [
            'tel'          => $data['tel'],
            'name'         => $data['name'],
            'order_remark' => $data['order_remark'],
            'rent_time'    => $data['rent_time'],
            'sign_time'    => strtotime($data['sign_time']),
        ];
        if(!empty($request['pic1'])){
            $file1 = $request->file('pic1');//身份证1
            $img1 = DB::table('order')->where('order_id',$order_id)->value('renter_idcard1');
            if(!empty($img1)){//如果数据库里之前存的照片不为空
                if($file1 != $img1){//如果上传的图片名字和数据库不一样
                    @unlink('./uploads/'.$img1);//删除之前存的照片
                    $renter_idcard1 = $file1->store('','uploads');//存取重新上传的
                    $order_data['renter_idcard1']= $renter_idcard1;//提交新的照片名字保存到数据库
                }
            }else{//如果之前没有上传照片，那么直接保存上传的图片并提交给数据库
                $renter_idcard1 = $file1->store('','uploads');//存取重新上传的
                $order_data['renter_idcard1']= $renter_idcard1;//提交新的照片名字保存到数据库
            }
        }
        if(!empty($data['pic11'])){
            $file11 = $request->file('pic11');//身份证2
            $img2 = DB::table('order')->where('order_id',$order_id)->value('renter_idcard2');
            if(!empty($img2)){
                if($file11 != $img2){
                    @unlink('./uploads/'.$img2);
                    $renter_idcard2 = $file11->store('','uploads');
                    $order_data['renter_idcard2']= $renter_idcard2;
                }
            }else{
                $renter_idcard2 = $file11->store('','uploads');
                $order_data['renter_idcard2']= $renter_idcard2;
            }
        }
        if(!empty($data['pic2']))
        {
            $file2 = $request->file('pic2');//护照
            $img3 = DB::table('order')->where('order_id',$order_id)->value('renter_passport');
            if(!empty($img3)){
                if($file2 != $img3){
                    @unlink('./uploads/'.$img3);
                    $renter_passport = $file2->store('','uploads');
                    $order_data['renter_passport']= $renter_passport;
                }
            }else{
                $renter_passport = $file2->store('','uploads');
                $order_data['renter_passport']= $renter_passport;
            }
        }
        if(!empty($data['pic3'])){
            $file3 = $request->file('pic3');//学生证
            $img4 = DB::table('order')->where('order_id',$order_id)->value('stu_idcard');
            if(!empty($img4)){
                if($file3 != $img4){
                    @unlink('./uploads/'.$img4);
                    $stu_idcard = $file3->store('','uploads');
                    $order_data['stu_idcard']= $stu_idcard;
                }
            }else{
                $stu_idcard = $file3->store('','uploads');
                $order_data['stu_idcard']= $stu_idcard;
            }
        }

        $result = DB::table('order')->where('order_id', $order_id)->update($order_data);
        if($result !== ''){
//                $uid = 1;
//                $req = DB::table('order')->where('uid', $uid)->get();
//                , ['result'=>$req,'orderStatus'=>$this->orderStatus]
            return redirect('order/orderList')->with('success', '修改成功！');
        }
    }*/

    //未付款取消订单
    public function orderCancel()
    {
        $order_id = $_REQUEST['order_id'];
        $qx_reason = isset($_REQUEST['qx_reason']) ? $_REQUEST['qx_reason'] : '';
        if($qx_reason == ''){
            $result = DB::table('order')->where('order_id',$order_id)->update(['order_status'=>'9']);
            if($result){return '1';}else{return '0';}
        }else{
            $re = DB::table('order')->where('order_id',$order_id)->update(['qx_reason'=>$qx_reason,'order_status'=>'9']);
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
        $img1 = DB::table('order')->where('order_id',$order_id)->value('renter_idcard1');
        $img2 = DB::table('order')->where('order_id',$order_id)->value('renter_idcard2');
        $img3 = DB::table('order')->where('order_id',$order_id)->value('renter_passport');
        $img4 = DB::table('order')->where('order_id',$order_id)->value('stu_idcard');
        if(!empty($img1)){@unlink('./uploads/'.$img1);}
        if(!empty($img2)){@unlink('./uploads/'.$img2);}
        if(!empty($img3)){@unlink('./uploads/'.$img3);}
        if(!empty($img4)){@unlink('./uploads/'.$img4);}
        $result = DB::table('order')->where('order_id',$order_id)->delete();
        if($result){return '1';}else{return '0';}
    }

    //二维码
    public function qrcode($order_id)
    {
        return view('order.qrcode',['order_id'=>$order_id]);
    }

}

















