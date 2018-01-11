<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Nation;
use App\Models\House_type;
class BaseController extends Controller {
	public function __construct(){

		//实例化国家表
		$nation = new Nation();
		//查数据
		$nationObject = $nation->get();
		//实例化类型表
		$houseType = new House_type();
		//查数据
		$houseTypeObject = $houseType->get();
		//公共方法传值
		return view()->share(['nationObject'=>$nationObject, 'houseTypeObject'=>$houseTypeObject]);
	}
}