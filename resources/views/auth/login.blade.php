@extends('mainlayout')

@section('container')
<div class="noo-page-heading">
	<div class="container-boxed max text-center parallax-content">
		<div class="page-heading-info">
			<h1 class="page-title">Member </h1>
		</div>
		<div class="page-sub-heading-info">
			Login or create an account 
		</div>
	</div>
</div> 

<div class="container-fullwidth bg-white">
	@if (count($errors) > 0)
		<div class="alert alert-danger customalert">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li><em>{{ $error }}</em></li>
				@endforeach
			</ul>
		</div>
	@endif
	@if(Session::has('messages'))
	<div class="alert alert-danger customalert">
		<strong>{{Session::get('messages')}}!</strong><br><br>
	</div>
	@endif
	<div class="row">
		<div class="login-box">
	      <div class="login-box-body">
	        <p class="login-box-msg">Sign in to start your session</p>
	        <form id="loginform" role="form" method="POST" action="{{ url('/auth/login') }}" method="post">
	          <input type="hidden" name="_token" value="{{ csrf_token() }}">
	          <div class="form-group has-feedback">
	            <input type="email" class="form-control" name="username" placeholder="Email" value="{{ old('username') }}" required>
	            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	          </div>
	          <div class="form-group has-feedback">
	            <input type="password" class="form-control" name="password"  placeholder="Password" required>
	            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	          </div>
	          <div class="row">
					<div class="col-xs-8">
				  		<div class="checkbox icheck">
				    		<label style="vertical-align: bottom;">
				      			<input type="checkbox" name="remember"> Remember Me
				    		</label>
				  		</div>
					</div>
					<div class="col-xs-4">
		              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
		            </div>
            	</div>
            	<a href="{{url('password/email')}}"><i class="fa fa-question-circle"></i> Forgot Password?</a>
	          </div>
	          
	        </form>

	        <div class="social-auth-links text-center">
	          <p>- OR -</p>
	          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
	          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
	        </div><!-- /.social-auth-links -->
	        <div class="social-auth-links text-center">
	          <p>- OR -</p>
	          
	          Don't have an account yet?
	          
	          <a href="{{url('auth/register')}}" class="member-links member-register-link btn btn-info">Create an account to explore<i class="fa fa-long-arrow-right"></i></a></span>
	        </div>
	      </div><!-- /.login-box-body -->
	    </div>
	</div>	
</div>
@endsection

@section('footerjs')
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
@endsection
