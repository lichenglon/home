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
class IndexController extends BaseController {
	/**
	 *前台首台
	 */
	public function index() {
		//实例化
		$houseMsg = new House_message();
		//查最新数据9条
		$houseObjData = $houseMsg->orderBy('msgid','desc')->paginate(9);
		//显示模板并传值
		return view('index',['houseObjData'=>$houseObjData]);
	}
}