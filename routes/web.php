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
	#高级搜索
	Route::any('advanced_search',$controller.'advanced_search');

});

//用户提交订单，返给用户填写租户信息表
Route::group(['prefix' => 'order'],function(){
    $controller = 'Order\OrderController@';
    #添加订单
    Route::any('orderAdd/{house_no?}',$controller.'orderAdd');
    #添加保存
    Route::any('orderSave',$controller.'orderSave');
	#取消订单
	Route::any('orderCancel/{order_id?}',$controller.'orderCancel');
	#删除订单
	Route::any('orderDelete/{order_id?}',$controller.'orderDelete');
	#修改订单
	Route::any('orderModify/{order_id?}',$controller.'orderModify');
	#修改保存
	Route::any('orderSaveMod',$controller.'orderSaveMod');
	#订单列表
	Route::any('orderList',$controller.'orderList');
	#订单详情
	Route::any('orderDetail/{order_id?}',$controller.'orderDetail');
	#QR code
	Route::any('qrcode/{order_id?}',$controller.'qrcode');
});


//联系我们
Route::group(['prefix' => 'contact_us'],function(){
	$controller = 'Contact_cn\ContactController@';
	#联系我们
	Route::any('contact',$controller.'contact');

});


//个人设置中心
Route::group(['prefix'=>'home'],function(){
	$controller = 'Data\DataController@';
	//显示
	Route::any('data/{id?}',$controller.'data');
	//更新
	Route::any('renewal',$controller.'renewal');

});
/*//
Route::group(['prefix'=>'drop'],function(){
	$controller = 'Drop\DropController@';
	Route::any('drop',$controller.'drop');
});
<<<<<<< HEAD
//二维码*/
=======

>>>>>>> 4dbfe8735a9d5a30fe849a96b59fc7fc0a804c1c



