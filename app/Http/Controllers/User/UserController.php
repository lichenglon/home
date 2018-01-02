<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Http\Controllers\User;

class UserController extends Controller {
	/**
	 *登陆页
	 */
	public function login() {
		return view('user.login');
	}
	//登录页面检测
	public function loginFind(Request $request){
		if($request->isMethod('post')){

			$uname = $request->input('uname');

			$upwd = $request->input('upwd');
			$userInfo = DB::table('tb_register')->where('uname',$uname)->first(); //从数据库中获取一条数据进行比对
			$userInfoPwd= DB::table('tb_register')->where('upwd',$upwd)->first();

			if(!empty($userInfo && $userInfoPwd)){

				if(!empty($userInfo && $userInfoPwd)){

					if(isset($userInfoPwd)){

						return redirect('/')->with('message', '登录成功');
					}else{
						return redirect('user/login')->with('message', '登录失败');
					}
				}else{
					return redirect('user/login')->with('message', '登录失败');
				}
			}else{
				return redirect('user/login')->with('message', '登录失败');
			}
		}

	}
	/**
	 *注册页
	 */
	public function register() {

		return view('user.register');
	}

	//注册入库
	public function save (Request $r) {

		$arr = Input::all();
		unset($arr['_token']);
		$re = DB::table('tb_register')->insert($arr);
		if($re)
		{
			return redirect('user/register')->with('message','添加成功');
		}else{
			return redirect('user/register')->with('message','添加失败');
		}



	}
}

