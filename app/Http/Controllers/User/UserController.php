<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
<<<<<<< HEAD
//use Symfony\Component\HttpFoundation\Session\Session;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Session;

=======
use Symfony\Component\HttpFoundation\Session\Session;
>>>>>>> 68e5c6b6cfced25332940676ae0862123ab314b6

class UserController extends Controller {
	/**
	 *登陆页
	 */

	public function login() {
		return view('user.login');
	}
<<<<<<< HEAD
=======

>>>>>>> 68e5c6b6cfced25332940676ae0862123ab314b6
	//登录页面检测
	public function loginFind(Request $request){
		$code = $request->code;
		$aaa = Session::get('milkcaptcha');
		if ($aaa == $code) {

			if($request->isMethod('post')){

<<<<<<< HEAD
				$uname = $request->input('uname');
=======
			$upwd = $request->input('upwd');
			$userInfo = DB::table('tb_register')->where('uname', $uname)->first(); //从数据库中获取一条数据进行比对
			$userInfoPwd = DB::table('tb_register')->where('upwd', $upwd)->first();
>>>>>>> 68e5c6b6cfced25332940676ae0862123ab314b6

				$upwd = $request->input('upwd');
				$userInfo = DB::table('tb_register')->where('uname', $uname)->first(); //从数据库中获取一条数据进行比对
				$userInfoPwd = DB::table('tb_register')->where('upwd',$upwd)->first();

				if(!empty($userInfo && $userInfoPwd)){

					if(isset($userInfoPwd)){
						Session::put('userId',$userInfoPwd->id);
						return redirect('/')->with('message', '登录成功');
					} else{
						return redirect('user/login')->with('message', '登录失败');
					}
				} else{
					return redirect('user/login')->with('message', '登录失败');
				}

			} else{
				return redirect('user/login')->with('message', '登录失败');

			}
		}else{

			return redirect('user/login')->with('message', '验证码错误');
		}
<<<<<<< HEAD
		//$userInput = Request::get('captcha');



=======
	}



	public function display(){
		if(!empty($_POST)){
			
			$arr = DB::table('tb_register')->select('uname','upwd')->get()->toarray();

			if($arr['0']['uname'] == $_POST['uname'] && $arr['0']['upwd'] == $_POST['upwd']){
				return redirect(url('/'));
			}else{
				return redirect(url('/'));
			}
		}
>>>>>>> 68e5c6b6cfced25332940676ae0862123ab314b6
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

