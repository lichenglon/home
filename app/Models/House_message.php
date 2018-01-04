<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\House_image;
class House_message extends Base
{
	protected $table = 'house_message';//房源信息表

	public function getImageOne($imgid) {
		$houseImg = new House_image();
		$houseObj = $houseImg->where('house_msg_id',$imgid)->first();
		if($houseObj) {
			echo $houseObj->house_imagename;
		} else {
			return 'no.jpeg';
		}
	}
}