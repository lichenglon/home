<?php
namespace App\Http\Controllers\Contact;
use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailer;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;


class ContactController extends BaseController {

	//use Queueable, SerializesModels;
	/**
	 *联系我们
	 */
	public function contact() {
		return view('contact.contact_index');
	}

	public function send(Mailer $mailer,Request $request)
	{
		$data = Input::all();
		$email = [
				'content' => "尊敬的{$data['yourname']}你好,我们已收到您的邮件！我们会在第一时间为您处理。",
				'subject' => "尊敬的{$data['yourname']}你好.....",//邮件主题

		];

		$mailer->raw($email['content'],function ($message)use ($email){
			$data = Input::all();
			$to = $data['email'];
			$message->from(env('MAIL_USERNAME'));
			$message ->to($to)->subject($email['subject']);
		});


		$arr = Input::all();
		unset($arr['_token']);
		$time = strtotime(carbon::now());

		$arr = [
			'yourname'	=>$request->yourname,
			'phonenumber'	=>$request->phonenumber,
			'email'	=>$request->email,
			'message'	=>$request->message,
			'time'=>$time
		];
		$data = DB::table('tb_email')->insert($arr);

		if($data){

			return view('contact.contact_index')->with('message','添加成功');
		}


	}

}