<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

class UserController extends Controller {
	/**
	 *登陆页
	 */
	public function login() {
		return view('user.login');
	}
	/**
	 *注册页
	 */
	public function register() {
		return view('user.register');
	}
}

