@extends('mainlayout')

@section('container')
<div class="noo-page-heading">
	<div class="container-boxed max text-center parallax-content">
		<div class="page-heading-info">
			<h1 class="page-title">Password</h1>
		</div>
		<div class="page-sub-heading-info">
			Recover your password
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
	        	<form id="loginform" role="form" method="POST" action="{{ url('/password/email') }}" method="post">
	        		<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="form-group has-feedback">
			            <input type="email" class="form-control" name="email" placeholder="E-Mail Address" value="{{ old('email') }}" required>
			            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			        </div>

					<div class="row">
						<div class="col-md-6 col-md-offset-2">
							<button type="submit" class="btn btn-primary">
								Send Password Reset Link
							</button>
						</div>
					</div>
		         </form>
	       	</div> 	
	    </div>
	</div>
</div>

@endsection
