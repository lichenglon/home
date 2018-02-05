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
		$uid = Session::get('userId');
		if(!empty($_REQUEST))
		{
			$data = [
				'uname' =>  $_REQUEST['u_nname'],
				'email' =>  $_REQUEST['u_mail'],
				'addr'  =>  $_REQUEST['u_add'],
				'phone' =>  $_REQUEST['u_tel'],
				'school'=>  $_REQUEST['u_school'],
				'sex'   =>  $_REQUEST['sex'],
				'hobby' =>  $_REQUEST['u_hobby'],
				'intro' =>  $_REQUEST['intro'],
			];

			$sql = DB::table('tb_register')->where('id',$uid)->update($data);
			if($sql){
				$pro = DB::table('tb_register')->where('id',$uid)->first();
				return view('setting.account',['result'=>$pro])->with('message', 'Update Successful');
			}
		}
		$pro = DB::table('tb_register')->where('id',$uid)->first();
		return view('setting.account',['result'=>$pro]);

	}


	public function secu(){
		$uid = Session::get('userId');
		if(!empty($_REQUEST)){
			$pwd = md5($_REQUEST['pwd1']);
			$up = DB::table('tb_register')->where('id',$uid)->update(['upwd'=>$pwd]);
		}
		$log = DB::table('login_log')->where('login_id',$uid)->orderby('login_time','desc')->paginate(7);
		return view('setting.secu',['log'=>$log]);
	}
}