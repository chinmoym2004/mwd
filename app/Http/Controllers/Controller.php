<?php namespace MWD\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Mail;
abstract class Controller extends BaseController {

	use DispatchesCommands, ValidatesRequests;


	public function SENDMAIL($emails,$subject,$template,$data)
	{
		Mail::send('emails.'.$template, $data, function ($m) use ($emails,$subject) {
            $m->to($emails)->subject($subject);
        });
	}
}
