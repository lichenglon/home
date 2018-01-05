<?php
namespace App\Http\Controllers\House;
use App\Http\Controllers\BaseController;
use App\Models\House_message;
use App\Models\House_image;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
class HouseController extends BaseController {
	/**
	 *房源列表
	 */
	public function listing(Request $request) {
		$houseMsg = new House_message();
		//接收关键字
		$house_keyword = $request->house_keyword ? $request->house_keyword : '%';
		//接收国家
		$state = $request->state ? $request->state : '%';
		//接收房源类型
		$house_type = $request->house_type ? $request->house_type : '%';
		//详细地址
		$house_location = $request->house_location ? $request->house_location : '%';
		//搜索按钮
		$Search = $request->Search ? $request->Search : '%';
		if ($Search) {
			$objData = $houseMsg->where('house_keyword','like','%'.$house_keyword.'%')
					->where('state','like','%'.$state.'%')
					->where('house_type','like','%'.$house_type.'%')
					->where('house_location','like','%'.$house_location.'%')
					->paginate(6);
		} else {
			$objData = $houseMsg->orderBy('msgid','desc')->paginate(6);
		}

		return view('house.listing', ['objData'=>$objData]);
	}

	/**
	 *详情页
	 */
	public function detail($id = 1) {
		$houseMsg = DB::table('house_message')
				->join('landlord_message', 'house_message.msgid', '=', 'landlord_message.house_id')
				->select('house_message.*', 'landlord_message.*')
				->where('msgid',$id)
				->first();
		$houseImg = new House_image();
		$imagesObj = $houseImg->where('house_msg_id', $id)->get();
		return view('house.detail', ['houseMsg'=>$houseMsg, 'imagesObj'=>$imagesObj]);
	}
}