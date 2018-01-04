<?php
namespace App\Http\Controllers\House;
use App\Http\Controllers\BaseController;
use App\Models\House_message;
use App\Models\House_image;
use DB;
use Illuminate\Support\Facades\Input;
class HouseController extends BaseController {
	/**
	 *房源列表
	 */
	public function listing() {
		$houseMsg = new House_message();
		$objData = $houseMsg->paginate(6);
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

	/**
	 *高级搜索
	 */
	public function advanced_search() {
		echo '<pre>';
		var_dump(Input::all());
	}
}