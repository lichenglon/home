<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Session\Session;
<<<<<<< HEAD
use App\Http\Controllers\User;
=======
<<<<<<< HEAD
use App\Http\Controllers\User;
=======
>>>>>>> 2c8df4c601c1bfdb8590ab37a5f99bdc8afc8b00
>>>>>>> 5de401220611d976745e6a38255a862c9c4b2bc0

class UserController extends Controller {
	/**
	 *登陆页
	 */
	public function login() {
		return view('user.login');
	}
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 5de401220611d976745e6a38255a862c9c4b2bc0
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

<<<<<<< HEAD
=======
=======

	public function display(){
		if(!empty($_POST)){
			
			$arr = DB::table('tb_register')->select('uname','upwd')->get()->toarray();

			if($arr['0']['uname'] == $_POST['uname'] && $arr['0']['upwd'] == $_POST['upwd']){
				return redirect(url('/'));
			}else{
				return redirect(url('/'));
			}
		}
>>>>>>> 2c8df4c601c1bfdb8590ab37a5f99bdc8afc8b00
>>>>>>> 5de401220611d976745e6a38255a862c9c4b2bc0
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

