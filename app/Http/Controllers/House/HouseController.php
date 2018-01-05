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
		//echo '<pre>';

		$houseMsg = new House_message();
		//接收关键字
		$house_keyword = $request->house_keyword ? $request->house_keyword : '%';
		//接收国家
		$state = $request->state ? $request->state : '%';
		//接收房源类型
		$house_type = $request->house_type ? $request->house_type : '%';
		//详细地址
		$house_location = $request->house_location ? $request->house_location : '%';
		//房源价格最小值
		$hiddenPriceMin = $request->hiddenPriceMin ? $request->hiddenPriceMin : '%';
		//房源价格最大值
		$hiddenPriceMax = $request->hiddenPriceMax ? $request->hiddenPriceMax : '%';
		//房屋设备
		//$check_box = $request->check_box ? $request->check_box : '%';
		if($request->check_box){
			$house_facility0 = $request->check_box[0];
			$house_facility1 = isset($request->check_box[1]) ? $request->check_box[1] : '%';
			$house_facility2 = isset($request->check_box[2]) ? $request->check_box[2] : '%';
			$house_facility3 = isset($request->check_box[3]) ? $request->check_box[3] : '%';
			$house_facility4 = isset($request->check_box[4]) ? $request->check_box[4] : '%';
			$house_facility5 = isset($request->check_box[5]) ? $request->check_box[5] : '%';
			$house_facility6 = isset($request->check_box[6]) ? $request->check_box[6] : '%';
		} else {
			$house_facility0 = '%';
			$house_facility1 = '%';
			$house_facility2 = '%';
			$house_facility3 = '%';
			$house_facility4 = '%';
			$house_facility5 = '%';
			$house_facility6 = '%';
		}

		//搜索按钮
		$Search = $request->Search ? $request->Search : '%';
		if ($Search) {
			$objData = $houseMsg->where('house_keyword','like','%'.$house_keyword.'%')
					->where('state','like','%'.$state.'%')
					->where('house_type','like','%'.$house_type.'%')
					->where('house_location','like','%'.$house_location.'%')
					->where('house_price','>',$hiddenPriceMin)
					->where('house_price','<',$hiddenPriceMax)
					->where('house_facility','like','%'.$house_facility0.'%'.$house_facility1.'%'.$house_facility2.'%'.$house_facility3.'%'.$house_facility4.'%'.$house_facility5.'%'.$house_facility6.'%')
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