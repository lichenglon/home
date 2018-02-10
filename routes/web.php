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
Route::get('/','IndexController@index')->name('/');


//404页面
Route::any('error_page','IndexController@error_page');

//用户
Route::group(['prefix'=>'user'],function() {
	$controller = 'User\UserController@';

	#登陆页
	Route::get('login',$controller.'login');
	#注册页
	Route::any('register',$controller.'register');
	#注册保存
	Route::any('save',$controller.'save');

	//登录检测
	Route::post('loginFind',$controller.'loginFind');

	//显示
	Route::any('data/{id?}',$controller.'data');
	//更新
	Route::any('renewal',$controller.'renewal');

	//退出
	Route::any('drop/{id?}',$controller.'drop');



});
Route::group(['prefix'=>'KitController'],function() {
	$controller = 'KitController\KitController@';
	//验证码
	Route::get('captcha/{tmp}',$controller.'captcha');

});

//新闻
Route::group(['prefix'=>'news'],function() {
	$controller = 'News\NewsController@';
	//详情页
	Route::any('foreign',$controller.'foreign');

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
	#添加房源收藏
	Route::get('houseLikeAdd',$controller.'houseLikeAdd');
	#收藏列表页
	Route::get('like',$controller.'like');
	#删除收藏
	Route::get('like_del',$controller.'like_del');
});

//用户提交订单，返给用户填写租户信息表
Route::group(['prefix' => 'order'],function(){
	$controller = 'Order\OrderController@';
	#添加订单
	Route::any('orderAdd/{house_no?}',$controller.'orderAdd');
	#添加保存
	Route::any('orderSave',$controller.'orderSave');
	#支付
	Route::any('pay/{result?}',$controller.'pay');
	#支付成功
	Route::any('payoff/{order_id?}',$controller.'payoff');
	#取消订单
	Route::any('orderCancel',$controller.'orderCancel');
	#取消订单原因
	Route::any('qxReason/{order_id?}',$controller.'qxReason');
	#删除订单
	Route::any('orderDelete/{order_id?}',$controller.'orderDelete');
	#修改订单
	Route::any('orderModify/{order_id?}',$controller.'orderModify');
	#修改保存
	Route::any('orderSaveMod',$controller.'orderSaveMod');
	#订单列表
	Route::any('orderList',$controller.'orderList');
	#订单详情
	Route::any('orderDetail/{order_id?}/{ac?}',$controller.'orderDetail');
	#QR code
	Route::any('qrcode/{order_id?}',$controller.'qrcode');

	#我的房源
	Route::any('myHouse',$controller.'myHouse');
});


//联系我们
Route::group(['prefix' => 'contact'],function(){
	$controller = 'Contact\ContactController@';
	#联系我们
	Route::any('me',$controller.'contact');

	//邮件
	Route::any('send',$controller.'send');

});

//setting
Route::group(['prefix'=>'setting'],function(){
	$controller = 'Setting\SettingController@';

	Route::any('account',$controller.'account');
	Route::any('secu',$controller.'secu');
});

//评论
Route::group(['prefix'=>'comment'],function(){
	#评论提交
	Route::any('comment','Comment\CommentController@index');
	#评论登陆
	Route::any('login','Comment\CommentController@login');
});








