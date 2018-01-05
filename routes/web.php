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
Route::group(['prefix'=>'KitController'],function() {
	$controller = 'KitController\KitController@';
	//验证码
	Route::get('captcha/{tmp}',$controller.'captcha');

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

//用户提交订单，返给用户填写租户信息表
Route::group(['prefix' => 'order'],function(){
    $controller = 'Order\OrderController@';
<<<<<<< HEAD
    #添加订单
    Route::any('orderAdd/{house_no?}/{uid?}',$controller.'orderAdd');
    #提交租户信息到数据库
    Route::any('orderSave',$controller.'orderSave');
=======
    #订单信息填写页面
    Route::any('renterInfo/{house_no?}',$controller.'renterInfo');
    #
    Route::any('saveRenterInfo',$controller.'saveRenterInfo');
>>>>>>> a427da44a5270f03fe380535b516a04c31899945
	#QR code
	Route::any('qrcode/{order_id?}',$controller.'qrcode');
	#订单列表
	Route::any('orderList',$controller.'orderList');
	#订单详情
	Route::any('orderDetail/{order_id?}',$controller.'orderDetail');
	#修改订单页面
	Route::any('orderModify/{order_id?}',$controller.'orderModify');
	#修改订单保存
	Route::any('orderSaveMod',$controller.'orderSaveMod');
	#删除订单
	Route::any('orderDelete/{order_id?}',$controller.'orderDelete');
});

//二维码

