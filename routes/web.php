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
//首页
Route::get('/','IndexController@index');

//用户
Route::group(['prefix'=>'user'],function() {
	$controller = 'User\UserController@';
	#登陆页
	Route::get('login',$controller.'login');
	#注册页
	Route::get('register',$controller.'register');
	#注册保存
	Route::post('save',$controller.'save');

	//登录检测
	Route::post('loginFind',$controller.'loginFind');

});

//房源
Route::group(['prefix'=>'house'],function() {
	$controller = 'House\HouseController@';
	#列表页
	Route::get('listing',$controller.'listing');
	#详情页
	Route::get('detail/{id?}',$controller.'detail');

});

//房源
Route::group(['prefix'=>'house'],function() {
	$controller = 'House\HouseController@';
	#列表页
	Route::get('listing',$controller.'listing');
	#详情页
	Route::get('detail/{id?}',$controller.'detail');
	#高级搜索
	Route::any('advanced_search',$controller.'advanced_search');

});
