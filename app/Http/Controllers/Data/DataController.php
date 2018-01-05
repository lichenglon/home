<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/4
 * Time: 18:46
 */

namespace App\Http\Controllers\Data;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class DataController extends Controller{

	public function data($id){
		$userData = DB::table('tb_register')->where('id',$id)->first();
		return view('home.data',['arr'=>$userData]);
	}

	public function renewal(Request $request){
		$id = $request->id;
		$arr = $request->except(["_token","id"]);
		$bool = DB::table("tb_register")->where("id",$id)->update($arr);

		if($bool)
		{
			return redirect('/')->with('message','添加成功');
		}else{
			return redirect('home/data')->with('message','添加失败');
		}
	}


}