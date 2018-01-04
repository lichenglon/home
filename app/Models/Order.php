<?php

namespace App\Model;

use App\Models\Base;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;


class Order extends Base
{
    //
	protected $table = 'order';
	public $timestamps = false;
}
