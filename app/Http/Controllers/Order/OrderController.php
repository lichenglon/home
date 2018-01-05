<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use DB;
use App\Models\Order;
class OrderController extends Controller
{
<<<<<<< HEAD

    public $orderStatus = [
        '1' => '未审核',
        '2' => '审核中',
        '3' => '订单驳回',
        '4' => '订单确认',
        '5' => '订单取消',
        '6' => '合同上传',
        '7' => '未付款'
    ];
    //添加订单
    public function orderAdd($house_no='AU022311111111',$uid=1)
    {
        $houseInfo = DB::table('house_message')->where('serial_number',$house_no)->first();

        return view("Order/orderAdd",['result'=>$houseInfo,'uid'=>$uid]);
=======
    //用户填写租户信息页面展示
    public function renterInfo($house_no='AU022311111111')
    {
        $houseInfo = DB::table('house_message')->where('serial_number',$house_no)->first();

        return view("Order/renterInfo",['result'=>$houseInfo]);
>>>>>>> a427da44a5270f03fe380535b516a04c31899945
    }

    //提交订单
    public function orderSave(Request $request){

        $data = Input::all();

        $time = time();

        $order_no = 'zhongjie'.$time.$data['house_no'];
        $order_data = [
<<<<<<< HEAD
            'uid' => 1,
=======
            'uid' => '1',
>>>>>>> a427da44a5270f03fe380535b516a04c31899945
            'order_no' => $order_no,
            'creat_time' => $time,
            'house_id' => $data['house_id'],
            'tel' => $data['tel'],
            'name' => $data['name'],
            'order_remark' => $data['order_remark'],
            'order_status' => 7,
            'payment_type' => 'crush',
            'payment_amount' => $data['house_price'],
           // 'renter_idcard' => $data['renter_idcard'],
           // 'renter_passport' => $data['renter_passport'],
           // 'stu_idcard' => $data['stu_idcard'],
            'house_no' => $data['house_no'],
            'house_name' => $data['house_name'],
            'house_price' => $data['house_price'],
            'house_location' => $data['house_location'],
            'rent_time' => $data['rent_time'],
            'sign_time' => strtotime($data['sign_time']),
        ];

        $result = DB::table('order')->insert($order_data);

        if($result)
        {
<<<<<<< HEAD
            $order_id = DB::table('order')->where('order_no',$order_no)->value('order_id');
//            return view('order/qrcode/$order_id');
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

        return view('order.orderDetail',['result'=>$result, 'orderStatus'=>$this->orderStatus]);
    }

    //修改订单
    public function orderModify($order_id)
    {
        $result = DB::table('order')->where('order_id',$order_id)->first();

        return view('order.orderModify',['result'=>$result]);
    }

    //修改保存
    public function orderSaveMod()
    {
        $data = Input::all();

        $order_id = $data['order_id'];

        $order_data = [
            'tel' => $data['tel'],
            'name' => $data['name'],
            'order_remark' => $data['order_remark'],
            // 'renter_idcard' => $data['renter_idcard'],
            // 'renter_passport' => $data['renter_passport'],
            // 'stu_idcard' => $data['stu_idcard'],
            'rent_time' => $data['rent_time'],
            'sign_time' => strtotime($data['sign_time']),
        ];

        $result = DB::table('order')->where('order_id',$order_id)->update($order_data);

        if($result !== '')
        {
            $uid = 1;
            $req = DB::table('order')->where('uid',$uid)->get();

            return redirect('order.orderList',['result'=>$req, 'orderStatus'=>$this->orderStatus])->with('success','修改成功！');
=======
           return view('order.qrcode');
>>>>>>> a427da44a5270f03fe380535b516a04c31899945
        }
    }

    //取消订单
    public function orderDelete($order_id)
    {
        $result = DB::table('order')->where('order_id',$order_id)->delete();
        if($result)
        {
            $uid = $result['uid'];
            $req = DB::table('order')->where('uid',$uid)->get();
            return redirect('order.orderList',['result'=>$req, 'orderStatus'=>$this->orderStatus])->with('success','您已成功取消订单！');
        }
    }

}

















