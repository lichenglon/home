<?php
namespace App\Http\Controllers\Contact_us;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
class ContactController extends BaseController {
	/**
	 *联系我们
	 */
	public function contact() {
		return view('contact_us.contact');
	}
}