<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/5
 * Time: 14:08
 */
namespace App\Http\Controllers\Drop;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;

class DropController extends Controller{
	public function drop($id){
		$bool = Session()->flush($id);
		if($bool == ''){
			return redirect('/');
		}
	}
}