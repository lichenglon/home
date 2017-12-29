<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','IndexController@index');

Route::group(['prefix'=>'user'],function() {
	$controller = 'User\UserController@';
	#登陆页
	Route::get('login',$controller.'login');
	#注册页
	Route::get('register',$controller.'register');

});
