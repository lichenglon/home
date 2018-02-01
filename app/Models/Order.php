<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
use App\Models\House_image;
class Order extends Base
{
	protected $table = 'order';//房源信息表
	public function getImageOne($imgid) {
		$houseImg = new House_image();
		$houseObj = $houseImg->where('house_msg_id',$imgid)->first();
		if($houseObj) {
			return $houseObj->house_imagename;
		} else {
			return 'no.jpeg';
		}
	}
}

