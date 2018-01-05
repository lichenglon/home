<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;

use App\Http\Controllers\User;
use Illuminate\Support\Facades\Session;


class UserController extends Controller {
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
				Session::put('userId',$userInfo->id);
				return redirect('/')->with('message', '登录成功');
			}
		} else {
			return redirect('user/login')->with('message', '验证码错误');
		}
	}

	/**
	 *注册页
	 */
	public function register() {
		return view('user.register');
	}
	//注册入库
	public function save (Request $request) {
		$arr = Input::all();
		unset($arr['_token']);
		$data = [
				'uname' => $request->uname,
				'upwd' => md5($request->upwd),
				'email' => $request->email,
				'phone' => $request->phone,
				'user' => $request->user,
				'status' => $request->status,
		];
		$re = DB::table('tb_register')->insert($data);
		if($re)
		{
			return redirect('user/register')->with('message','添加成功');
		}else{
			return redirect('user/register')->with('message','添加失败');
		}
	}
}
