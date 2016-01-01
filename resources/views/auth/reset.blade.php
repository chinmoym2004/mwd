@extends('mainlayout')

@section('container')
<div class="noo-page-heading">
	<div class="container-boxed max text-center parallax-content">
		<div class="page-heading-info">
			<h1 class="page-title">Password</h1>
		</div>
		<div class="page-sub-heading-info">
			Set your new password
		</div>
	</div>
</div> 
<div class="container-fullwidth bg-white">
	@if (count($errors) > 0)
		<div class="alert alert-success customalert">
			<strong>Whoops!</strong> There were some problems with your input.<br><br>
			<ul>
				@foreach ($errors->all() as $error)
					<li><em>{{ $error }}</em></li>
				@endforeach
			</ul>
		</div>
	@endif
	@if(Session::has('messages'))
	<div class="alert alert-success customalert">
		<strong>{{Session::get('messages')}}!</strong><br><br>
	</div>
	@endif

	<div class="row">
		<div class="login-box">
	      	<div class="login-box-body">
	        	<p class="login-box-msg">Reset Password</p>
	        	<form id="loginform" role="form" method="POST" action="{{ url('/password/reset') }}" method="post">
	        		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	        		<input type="hidden" name="token" value="{{ $token }}">

					<div class="form-group has-feedback">
						<input type="email" class="form-control" name="email" placeholder="E-Mail Address" value="{{ old('email') }}">
			            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			        </div>
			        <div class="form-group has-feedback">
						<input type="password" class="form-control" name="password" placeholder="New Password">
			            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
			        </div>
			        <div class="form-group has-feedback">
						<input type="password" class="form-control" name="password_confirmation" placeholder="Password Confirm" value="{{ old('email') }}">
			            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
			        </div>

					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<button type="submit" class="btn btn-primary">
								Reset Password
							</button>
						</div>
					</div>
		         </form>
	       	</div> 	
	    </div>
	</div>
</div>
@endsection
