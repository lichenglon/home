<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;

class OrderController extends Controller
{
    public $orderStatus = [
        '1' => '未审核',
        '2' => '审核中',
        '3' => '订单驳回',
        '4' => '订单确认',
        '5' => '订单已取消',
        '6' => '合同上传',
        '7' => '未付款'
    ];
    //添加订单
    public function orderAdd($house_no='AU022311111111',$uid=1)
    {
        $houseInfo = DB::table('house_message')->where('serial_number', $house_no)->first();

        return view("Order/orderAdd", ['result' => $houseInfo, 'uid' => $uid]);
    }

    //提交订单
    public function orderSave(Request $request)
    {
        $data = Input::all();


        $file1 = $request->file('pic1');//身份证1
        $file11 = $request->file('pic11');//身份证2
        $file2 = $request->file('pic2');//护照
        $file3 = $request->file('pic3');//学生证

        $renter_idcard1 = $file1->store('','uploads');
        $renter_idcard2 = $file11->store('','uploads');
        $renter_passport = $file2->store('','uploads');
        $renter_stucard = $file3->store('','uploads');

        $time = time();
        $order_no = 'zhongjie'.$time.$data['house_no'];

        $order_data = [

            'uid'            => '1',
            'order_no'       => $order_no,
            'creat_time'     => $time,
            'house_id'       => $data['house_id'],
            'tel'            => $data['tel'],
            'name'           => $data['name'],
            'order_remark'   => $data['order_remark'],
            'order_status'   => 7,
            'payment_type'   => 'crush',
            'payment_amount' => $data['house_price'],
            'renter_passport' => $renter_passport,
            'stu_idcard' => $renter_stucard,
            'renter_idcard1' => $renter_idcard1,
            'renter_idcard2' => $renter_idcard2,
            'house_no'       => $data['house_no'],
            'house_name'     => $data['house_name'],
            'house_price'    => $data['house_price'],
            'house_location' => $data['house_location'],
            'rent_time'      => $data['rent_time'],
            'sign_time'      => strtotime($data['sign_time']),
        ];

        $result = DB::table('order')->insert($order_data);

        if($result){

            $order_id = DB::table('order')->where('order_no', $order_no)->value('order_id');
            return view('order.qrcode',['order_id',$order_id]);
        }
    }

    //订单列表
    public function orderList()
    {
        $uid = 1;
        $result = DB::table('order')->where('uid',$uid)->get();
        return view('order.orderList',['result'=>$result, 'orderStatus'=>$this->orderStatus]);
    }

    //查看订单详情
    public function orderDetail($order_id)
    {
        $result = DB::table('order')->where('order_id',$order_id)->first();
        return view('order.orderDetail',['result'=>$result ,'orderStatus'=>$this->orderStatus]);
    }

    //修改订单
    public function orderModify($order_id)
    {
        $result = DB::table('order')->where('order_id',$order_id)->first();


        return view('order.orderModify',['result'=>$result]);
    }

    //修改保存
    public function orderSaveMod(Request $request)
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




        if(!empty($request['pic1']))
        {
            $file1 = $request->file('pic1');//身份证1
            $renter_idcard1 = $file1->store('','uploads');
            $order_data['renter_idcard1']= $renter_idcard1;
        }

        if(!empty($data['pic11']))
        {
            $file11 = $request->file('pic11');//身份证2
            $renter_idcard2 = $file11->store('','uploads');
            $order_data['renter_idcard2']= $renter_idcard2;
        }

        if(!empty($data['pic2']))
        {
            $file2 = $request->file('pic2');//护照
            $renter_passport = $file2->store('','uploads');
            $order_data['renter_passport']= $renter_passport;
        }

        if(!empty($data['pic3']))
        {
            $file3 = $request->file('pic3');//学生证
            $stu_idcard = $file3->store('','uploads');
            $order_data['stu_idcard']= $stu_idcard;
        }

        $result = DB::table('order')->where('order_id', $order_id)->update($order_data);

        if($result !== '')
        {
//                $uid = 1;
//                $req = DB::table('order')->where('uid', $uid)->get();
//                , ['result'=>$req,'orderStatus'=>$this->orderStatus]

            return redirect('order/orderList')->with('success', '修改成功！');

        }
    }

    //取消订单
    public function orderCancel($order_id)
    {
        $order_id = (int)$order_id;
        $result = DB::table('order')->where('order_id',$order_id)->update(['order_status'=>'5']);
        if($result)
        {
            $uid = 1;
            $req = DB::table('order')->where('uid',$uid)->get();
            return redirect('order/orderList');
        }
    }

    public function orderDelete($order_id)
    {
        $order_id = (int)$order_id;
        $result = DB::table('order')->where('order_id',$order_id)->delete();
        if($result)
        {
            $uid = 1;
            $req = DB::table('order')->where('uid',$uid)->get();
            return redirect('order/orderList');
        }
    }



    //二维码
    public function qrcode($order_id)
    {
        return view('order.qrcode',['order_id'=>$order_id]);
    }

}

















