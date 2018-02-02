<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/31
 * Time: 15:47
 */
namespace App\Http\Controllers\Comment;
use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class CommentController extends BaseController
{
	public function index()
	{
		$data = Input::all();
		unset($data['_token']);
		$data['create_time'] = time();
		$rs = DB::table('comment')->insert($data);
		if($rs)
		{
			return redirect('house/detail/'.$data['house_id']);
		}

	}

	/**
	 *评论登陆
	 */
	public function login(Request $request)
	{
		//return $request->account_l;

		$uname = $request->account_l;
		$upwd = md5($request->password_l);
		$rs = DB::table('tb_register')->where('uname',$uname)->first();
		if(!$rs)
		{
			return 0;//用户名不存在
		}
		if($upwd != $rs->upwd)
		{
			return 2;//密码不正确
		}
		if($upwd == $rs->upwd)
		{
			Session::put('userId',$rs->id);
			Session::flash('xinxin',$request->xinxin);
			Session::flash('textarea',$request->textarea);
			return 1;
		}

	}

}