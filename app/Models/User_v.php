<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/2
 * Time: 11:42
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class user_v extends Base{
	function getCity($ip = '')//获取地区
	{
		if($ip == ''){
			$url = "http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=json";//新浪借口获取访问者地区
			$ip=json_decode(file_get_contents($url),true);
			$data = $ip;
		}else{
			$url="http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;//淘宝借口需要填写ip
			$ip=json_decode(file_get_contents($url));
			if((string)$ip->code=='1'){
				return false;
			}
			$data = (array)$ip->data;
		}

		return $data;
	}
}