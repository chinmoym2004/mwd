<?php 
namespace MWD\Http\Controllers;

use MWD\Model\User;
use MWD\Model\University;
use MWD\Model\Profile;
use Auth;
class UserController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getProfile()
	{
		$getprifile = Profile::where('user_id','=',Auth::user()->id)->first();
		return view('employee.profile');
	}

}
