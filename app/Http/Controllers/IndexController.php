<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/28
 * Time: 16:21
 */
namespace App\Http\Controllers;

class IndexController extends Controller {
	/**
	 *前台首台
	 */
	public function index() {
		return view('index');
	}
}