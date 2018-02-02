<?php
namespace App\Http\Controllers\House;
use App\Http\Controllers\BaseController;
use App\Models\House_message;
use App\Models\House_image;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User_house_collect;
class HouseController extends BaseController {
	/**
	 *房源列表
	 */
	public function listing(Request $request)
	{
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
		if($request->check_box)
		{
			$house_facility0 = $request->check_box[0];
			$house_facility1 = isset($request->check_box[1]) ? $request->check_box[1] : '%';
			$house_facility2 = isset($request->check_box[2]) ? $request->check_box[2] : '%';
			$house_facility3 = isset($request->check_box[3]) ? $request->check_box[3] : '%';
			$house_facility4 = isset($request->check_box[4]) ? $request->check_box[4] : '%';
			$house_facility5 = isset($request->check_box[5]) ? $request->check_box[5] : '%';
			$house_facility6 = isset($request->check_box[6]) ? $request->check_box[6] : '%';
		}
		else
		{
			$house_facility0 = '%';
			$house_facility1 = '%';
			$house_facility2 = '%';
			$house_facility3 = '%';
			$house_facility4 = '%';
			$house_facility5 = '%';
			$house_facility6 = '%';
		}

		//搜索按钮
		//$Search = $request->Search ? $request->Search : '%';
		if ($request->_token)
		{
			$objData = $houseMsg->where('house_name','like','%'.$house_keyword.'%')
					->where('state','like','%'.$state.'%')
					->where('house_type','like','%'.$house_type.'%')
					->where('house_location','like','%'.$house_location.'%')
					->where('house_price','>',$hiddenPriceMin)
					->where('house_price','<',$hiddenPriceMax)
					->where('house_facility','like','%'.$house_facility0.'%'.$house_facility1.'%'.$house_facility2.'%'.$house_facility3.'%'.$house_facility4.'%'.$house_facility5.'%'.$house_facility6.'%')
					->paginate(6);
		}
		else
		{
			$objData = $houseMsg->orderBy('msgid','desc')->paginate(6);
		}
		//获取用户房源收藏记录
		$userId = Session::get('userId');
		if($userId){
			$userLike = Db::table('user_house_collect')->where('user_id',$userId)->first();
		}else{
			$userLike = [];
		}

		return view('house.listing', ['objData'=>$objData, 'userLike' => $userLike,]);
	}

	/**
	 *详情页
	 */
	public function detail($id = 1)
	{
		$houseMsg = DB::table('house_message')
				->join('landlord_message', 'house_message.msgid', '=', 'landlord_message.house_id')
				->select('house_message.*', 'landlord_message.*')
				->where('msgid',$id)
				->first();
		$houseImg = new House_image();
		$imagesObj = $houseImg->where('house_msg_id', $id)->get();
		$house = new House_message();
		$objData = $house->orderBy('msgid','desc')->paginate(6);

		//评论
		$comment = DB::table('comment')->where('house_id',$id)->join('tb_register','comment.user_id','=','tb_register.id')->select('comment.*','tb_register.user')->get();

		return view('house.detail', ['houseMsg'=>$houseMsg, 'imagesObj'=>$imagesObj,'objData'=>$objData, 'comment' => $comment]);
	}

	/**
	 *Ajax房源请求收藏
	 */
	public function houseLikeAdd()
	{
		$user_house_collect = new User_house_collect();
		$houseId = $_GET['house_id'];
		$userId = $_GET['userId'];
		$initialize = $user_house_collect->where('user_id',$userId)->first();
		if($initialize)
		{
			$collectHouseNum = explode(',',$initialize->house_id);//字符串转数组
			$judgeNumExist = in_array($houseId,$collectHouseNum);//判断房源ID是否已存在
			if($judgeNumExist)
			{
				return '1';//已收藏
				exit();
			}
			else
			{
				if(!empty($initialize->house_id)){
					$updateHouseId = $initialize->house_id.','.$houseId;
					$user_house_collect->where('user_id',$userId)->update(['house_id'=>$updateHouseId]);
					return '2';//收藏成功
					exit();
				}else{
					$user_house_collect->where('user_id',$userId)->update(['house_id'=>$houseId]);
					return '2';//收藏成功
					exit();
				}
			}
		}
		else
		{
			$user_house_collect->insert(['user_id'=>$userId,'house_id'=>$houseId]);
			return '2';//收藏成功
			exit();
		}
		return '0';//收藏失败
	}

	/**
	 * 房源收藏列表
	 */
	public function like()
	{
		$userId = Session::get('userId');
		$user_house_collect = new User_house_collect();
		$userCollect = $user_house_collect->where('user_id',$userId)->first();
		if($userCollect)
		{
			$houseId = explode(',',$userCollect->house_id);
			$houseMsg = new House_message();
			foreach($houseId as $value)
			{
				$data = $houseMsg->select('msgid','house_name','house_facility')->where('msgid',$value)->first();
				$arr[] = $data;
			}
		}
		else
		{
			$arr = array();
		}
		return view('house.like.like_index',['arr'=>$arr]);
	}

	/**
	 * 房源收藏删除
	 */
	public function like_del()
	{
		$msgid = $_GET['msgid'];
		$userId = Session::get('userId');
		$user_house_collect = new User_house_collect();
		$data = $user_house_collect->where('user_id',$userId)->first();
		$houseIdArr = explode(',',$data->house_id);
		foreach($houseIdArr as $k => $v)
		{
			if($v == $msgid)
			{
				unset($houseIdArr[$k]);
			}
		}
		$result = implode(',',$houseIdArr);
		$rs = $user_house_collect->where('user_id',$userId)->update(['house_id'=>$result]);
		if($rs)
		{
			return '1';
			exit();
		}
		return '0';
	}
}