<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Nation;
use App\Models\House_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App;
use App\Models\House_message;
class BaseController extends Controller {
	public function __construct(){

		$this->middleware('CheckLang');

		//实例化国家表
		$nation = new Nation();
		//查数据
		$nationObject = $nation->get();
		//实例化类型表
		$houseType = new House_type();
		//查数据
		$houseTypeObject = $houseType->get();
		$houseMsg = new House_message();
		//精选楼盘推荐
		$recommend = $houseMsg->orderBy('msgid','desc')->paginate(3);
		//公共方法传值
		return view()->share(['nationObject'=>$nationObject, 'houseTypeObject'=>$houseTypeObject, 'recommend' => $recommend]);

	}
}