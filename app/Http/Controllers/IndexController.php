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
class IndexController extends BaseController {
	/**
	 *前台首台
	 */
<<<<<<< HEAD
	public function index() {
		$locale = isset($_GET['lang']) ? $_GET['lang'] : false;
		if($locale){
			if(Session::get('lang')){
				Session::forget('lang');
				session(['lang'=>$locale]);     //lang:键    $locale:值
			}else{
				session(['lang'=>$locale]);
			}
		}

=======
	public function index()
	{
>>>>>>> c4c513deb5ff260d3da705a19b8e5ed54373bdc8
		//实例化
		$houseMsg = new House_message();
		//查最新数据9条
		$houseObjData = $houseMsg->orderBy('msgid','desc')->paginate(9);
		//显示模板并传值
		return view('index',['houseObjData'=>$houseObjData]);
	}

	/**
	 *错误页面
	 */
	public function error_page()
	{
		return view('error_page.error_index');
	}
}