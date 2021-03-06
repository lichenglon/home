<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/28
 * Time: 16:21
 */
namespace App\Http\Controllers;
use App\Http\Controllers\BaseController;
use App\Models\House_message;
use App;
use Illuminate\Support\Facades\Session;
use DB;
//use App\Models\User_v;

class IndexController extends BaseController{
	/**
	 *前台首台
	 */
	public function index(){
		$locale = isset($_GET['lang']) ? $_GET['lang'] : false;

		if($locale){
			if(Session::get('lang')){
				Session::forget('lang');
				session(['lang' => $locale]);     //lang:键    $locale:值
			} else{
				session(['lang' => $locale]);
			}
		}
		//获取用户房源收藏记录
		$userId = Session::get('userId');
		if($userId){
			$userLike = Db::table('user_house_collect')->where('user_id',$userId)->first();
		}else{
			$userLike = [];
		}
		//实例化
		$houseMsg = new House_message();
		//查最新数据9条
		$houseObjData = $houseMsg->where('chk_sta','2')->orderBy('msgid', 'desc')->paginate(9);

		//登录记录
//		$user = new user_v();
//		$addr = $user->getCity();
//		$login_add  = $addr['country'].$addr['province'].'省'.$addr['city'].'市';
		$login_add = "中国广东省深圳市";
		$login_time = time();
		$login_ip   = $_SERVER["REMOTE_ADDR"];
		$login_id = $userId;
		$data = [
				'login_add' =>  $login_add,
				'login_time'=>  $login_time,
				'login_ip'  =>  $login_ip,
				'login_id'  =>  $login_id,
		];
		DB::table('login_log')->insert($data);

		//显示模板并传值
		return view('index', ['houseObjData' => $houseObjData, 'userLike' => $userLike]);
	}


	/**
	 *错误页面
	 */
	public function error_page(){
		return view('error_page.error_index');
	}
}
