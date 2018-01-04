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
    //用户填写租户信息页面展示
    public function renterInfo($house_no='AU022311111111',$uid=1)
    {
        $houseInfo = DB::table('house_message')->where('serial_number',$house_no)->first();

        return view("Order/renterInfo",['result'=>$houseInfo,'uid'=>$uid]);
    }

    //用户提交租户信息
    public function saveRenterInfo(Request $request){
        //接收图片
//        $files = $request->file('upload');
//        foreach ($files as $file) {
//            //保存
//            $imagename = $file->store('','uploads');
//            var_dump($imagename);
//        }

        $data = Input::all();

        $n = strtotime(date('Y-m-d H:i:s'));
        $order_no = 'zhongjie'.$n.$data['house_no'];
        $order_data = [
            'uid' => $data['uid'],
            'order_no' => $order_no,
            'creat_time' => $n,
            'house_id' => $data['house_id'],
            'tel' => $data['tel'],
            'name' => $data['name'],
            'order_remark' => $data['order_remark'],
            'order_status' => 7,
           // 'renter_idcard' => $data['renter_idcard'],
           // 'renter_passport' => $data['renter_passport'],
           // 'stu_idcard' => $data['stu_idcard'],
            'house_no' => $data['house_no'],
            'rent_time' => $data['rent_time'],
            'sign_time' => strtotime($data['sign_time']),
        ];

        $order = new Order();
        $re = $order->save($order_data);
        //$result = DB::table('order')->save($order_data);

        exit();
        if($result)
        {
            $order_id = DB::table('order')->where('order_no',$order_no)->value('order_id');
            echo $order_id;
            //return view('order/qrcode/');
        }

    }

    //信息提交
}

















