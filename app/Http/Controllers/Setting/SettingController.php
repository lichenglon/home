<?php
namespace App\Http\Controllers\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use DB;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\BaseController;


class SettingController extends BaseController
{
	public function account(){
		return view('setting.account');
	}
}