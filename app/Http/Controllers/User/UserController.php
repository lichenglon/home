<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Session\Session;

class UserController extends Controller {
	/**
	 *登陆页
	 */
	public function login() {
		return view('user.login');
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

