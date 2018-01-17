<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15
 * Time: 11:48
 */
namespace App\Http\Controllers\News;
use App\Http\Controllers\BaseController;
use App\Models\House_message;
use App;
use Illuminate\Support\Facades\Session;


class NewsController extends BaseController{

	public function foreign(){
		return view('news.foreign');
	}
}