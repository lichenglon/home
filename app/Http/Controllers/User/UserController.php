<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\App;


class UserController extends BaseController {
	/**
	 *登陆页
	 */
	public function login() {
		return view('user.login');

	}

	//登录页面检测
	public function loginFind(Request $request){
		$code = $request->code;
		$uname = $request->input('uname');
		$upwd = $request->input('upwd');
		$password = md5($upwd);
		$sessionCodeNum = Session::get('milkcaptcha');

		if($code == $sessionCodeNum){
			$userInfo = DB::table('tb_register')->where('uname',$uname)->first();
			if(!$userInfo){
				return redirect('user/login')->with('message', '用户名不存在！');
			}
			if($password != $userInfo->upwd){
				return redirect('user/login')->with('message', '密码错误！');
			}
			if($userInfo->upwd == $password){
				$sessionid = Session::put('userId',$userInfo->id);
				return redirect('/')->with($sessionid);

			}
		} else {
			return redirect('user/login')->with('message', '验证码错误');
		}
	}

	/**
	 *注册页
	 */
	public function register(Request $request){

		return view('user.register');
	}
	//注册入库
	public function save (Request $request) {

		if(isset($request->username)){
			$data = DB::table('tb_register')->where('uname', $request->username)->first();
			if($data){
				return 1;
			}
		}else{
			$arr = Input::all();
			unset($arr['_token']);
			$arr['upwd'] = md5($arr['upwd']);

			$re = DB::table('tb_register')->insert($arr);
			if($re == true){
				return view('user/login')->with('message', '添加成功');
			} else{
				return view('error_page');
			}
		}


	}



	//退出
	public function drop($id){
		$bool = Session()->flush($id);
		if($bool == ''){
			return redirect('/');
		}
	}

	//数据显示
	public function data($id){
		$userData = DB::table('tb_register')->where('id',$id)->first();
		return view('user.data',['arr'=>$userData]);
	}

	//更新
	public function renewal(Request $request){
		$id = $request->id;
		$arr = $request->except(["_token","id"]);
		$bool = DB::table("tb_register")->where("id",$id)->update($arr);

		if($bool)
		{
			return redirect('/')->with('message','添加成功');
		}else{
			return redirect('user/data')->with('message','添加失败');
		}
	}



}
