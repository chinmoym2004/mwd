<?php 

namespace MWD\Http\Controllers\Auth;

use MWD\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Request;
use Validator;
use Input;
use Response;
use Auth;
use MWD\Model\User;
use MWD\Model\University;
use MWD\Model\Profile;
use MWD\Model\Verifiedemail;
use Redirect;
class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

	public function getLogin()
	{
		if(Auth::check() && Auth::user()->type='employee')
			return redirect('user/profile');
		else if(Auth::check() && Auth::user()->type='employeer')
			return redirect('user/dashboard');


		return view('auth.login');
	}

	public function postLogin(Request $request)
	{

		$usernameinput = Input::get('username');
		$field = filter_var($usernameinput, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

		$loginrule = array(
	        'username'  => 'required|exists:users,'.$field,
	        'password' => 'required',
	    );

	    if($field=='email')
			$messages = [
			    'username.exists' => 'I really don\'t see your e-mail in my record !',
			];
		else
			$messages = [
			    'username.exists' => 'I really don\'t see your username in my record !',
			];

		$validator = Validator::make(Input::all(), $loginrule,$messages);

	    if ($validator->fails()) 
	    {
	        /*$messages = $validator->messages();
	        $response = array(
				'status'=>'error',
				'message'=>$messages,
			);
		    return Response::json($response, 412);*/
		    return redirect('auth/login')->withErrors($validator)->withInput();
		    //return Redirect::to('auth/logn')->withError()->withInput();
		}


		$getuser = User::where('email','=',Input::get('username'))->first();
		
		if($getuser->email_verified==1)
		{
			//login
			
			$remember = Input::get('remember')=='yes'?true:false;
			if (Auth::attempt(array($field => $usernameinput, 'password' => Input::get('password')), $remember)) 
			{
			 	// success login    
			 	/*$response = array(
					'status'=>'error',
					'is_verfied'=>true,
					'message'=>['error'=>['Invalid credentials']],
				);
			    return Response::json($response, 412);	*/	    
			 	if(Auth::user()->role=='employee')
			 	{
			 		/*$response = array(
						'status'=>'success',
						'data'=>['redirectto'=>'profile'],
					);
				    return Response::json($response, 200);*/
			 		return redirect('user/profile');
			 	}
                else if(Auth::user()->role=='employeer')
                {
			 		/*$response = array(
						'status'=>'success',
						'data'=>['redirectto'=>'dashboard'],
					);
				    return Response::json($response, 200);*/

				    return redirect('user/dashboard');
                }
			}
			else
			{
				// wrong credential
                /*$response = array(
						'status'=>'error',
						'message'=>['error'=>['Invalid username or password !']],
					);
				return Response::json($response, 412);*/
				return redirect('auth/login')->with('messages','Invalid username or password !');
			}
		}
		else
		{
			// resend mail page
			/*$response = array(
				'status'=>'success',
				'data'=>['redirectto'=>'auth/verification','flash_message'=>'It seems you have not verified your email yet'],
			);
		    return Response::json($response, 200);*/
			return redirect('auth/verification')->with('messages','It seems you have not verified your email yet');
		}		
	}
	public function getRegister()
	{
		$university = University::all();
		return view('auth.register',compact('university'));
	}

	public function postRegister(Request $request)
	{
		
		$regrule = array(
	        'fname'  => 'required',
	        'email'=>'required|unique:users,email',
	        'password'=>'required|confirmed',
	        'university'=>'required'
	    );

		$messages = [
		    'university.required' => 'Please specify your UG/PG/PHD etc. university',		    
		    'email.required' => 'Email is required',
		    'email.unique' => 'Email already exist',
		    'fname.required' => 'Full Name require',
		];

		$validator = Validator::make(Input::all(), $regrule,$messages);

	    if ($validator->fails()) 
	    {
	        $messages = $validator->messages();
	        /*$response = array(
				'status'=>'error',
				'message'=>$messages,
			);
		    return Response::json($response, 412);*/
		    return redirect('auth/register')->withErrors($validator)->withInput();
		}
		// create new user
		$newuser = new User;
		$newuser->username = Input::get('email');
		$newuser->email = Input::get('email');
		$newuser->role = Input::get('role');
		$newuser->password = bcrypt(Input::get('password'));
		$newuser->save();
		// update profile too 
		$newprofile = new Profile;
		$newprofile->university_id = Input::get('university');
		$newprofile->fullname = Input::get('fname');
		$newprofile->contact_email = Input::get('email');
		$newprofile->user_id = $newuser->id;
		$newprofile->save();

		// send mail link for varification

		$verifiedemail = new Verifiedemail;
		$verifiedemail->user_id =  $newuser->id;
		$verifiedemail->email =  Input::get('email');
		$verifiedemail->token = uniqid();
		$verifiedemail->save();

		// send mail

		$data = [
			'name'=>Input::get('fname'),
			'token'=>$verifiedemail->token,
			'email'=>Input::get('email')
		];
		$emails = [Input::get('email')];
		$subject = 'MyWorkDetails : Email Verification';
		$template = 'welcome';

		$this->SENDMAIL($emails,$subject,$template,$data);

		/*$response = array(
			'status'=>'success',
			'data'=>['redirectto'=>'auth/login','flash_message'=>'Check your mail to get email verified and get started'],
		);
	    return Response::json($response, 200);*/

	    return redirect('auth/login')->with('messages','Check your mail to get email verified and get started');

	}
	public function getVerification()
	{
		//return view('auth.verification');
		// check with incoming request 
		if(Input::has('type') && Input::has('token'))
		{
			$verify = Verifiedemail::where('email','=',Input::get('type'))->where('token','=',Input::get('token'))->first();
			if(count($verify))
			{
				// update verification table
				Verifiedemail::where('email','=',Input::get('type'))->where('token','=',Input::get('token'))->update(['status'=>1]);
				// update user table
				User::where('id','=',$verify->user_id)->update(['email_verified'=>1]);
				return redirect('auth/login')->with('messages','Email successfully verified ! ');
			}
			else
			{
				return view('auth.verification')->with('messages','Either token has expired or link broken');
			}
		}
		else
		{
			return view('auth.verification')->with('messages','Invalid link');
		}
	}

	public function postVerification()
	{

	}

	public function getVerified()
	{

	}


	/**
	 * Get the post register / login redirect path.
	 *
	 * @return string
	 */
	/*public function redirectPath()
	{
		if (property_exists($this, 'redirectPath'))
		{
			return $this->redirectPath;
		}

		return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
	}*/
}
