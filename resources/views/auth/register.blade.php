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
					<li>{{ $error }}</li>
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
	        <p class="login-box-msg">Become a member today</p>
	        <form id="register" role="form" method="POST" action="{{ url('auth/register') }}" method="post">
	          <input type="hidden" name="_token" value="{{ csrf_token() }}">
	          <div class="form-group has-feedback">
	            <!-- <input type="text" class="form-control" placeholder="Full name"> -->
	            <select class="form-control" id="university" name="university" required>
	            	<option value=""> -- Select your University -- </option>
	            	@foreach($university as $univ)
	            		<option value="{{$univ->id}}">{{$univ->u_name}}</option>
	            	@endforeach
	            </select>
	            <span class="fa fa-institution form-control-feedback"></span>
	            <p><a href="{{url('member/request')}}">Don't see your Universiry/ College ?</a></p>
	          </div>
	          <div class="form-group has-feedback">
	            <input type="text" class="form-control" name="fname" placeholder="Enter name as per your 10'th certificate ]" required>
	            <span class="glyphicon glyphicon-user form-control-feedback"></span>
	          </div>
	          <div class="form-group has-feedback">
	            <input type="email" class="form-control" placeholder="Contct Email" name="email" required>
	            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
	          </div>
	          <div class="form-group has-feedback">
	            <input type="password" class="form-control" placeholder="Password" name="password" required>
	            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	          </div>
	          <div class="form-group has-feedback">
	            <input type="password" class="form-control" placeholder="Retype password" name="password_confirmation" required>
	            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
	          </div>
	          <div class="row">
	          	<div class="col-xs-12"><p><a href="#" data-toggle="modal" data-target="#checklist">Required Steps to verify account</a></p></div>
	          </div>
	          <div class="row">
	            <div class="col-xs-8">
	              <div class="checkbox icheck">
	                <label>
	                  <input type="checkbox" required> I agree to the <a href="#">terms</a>
	                </label>
	              </div>
	            </div><!-- /.col -->
	            <input type="hidden" name="role" value="employee">
	            <div class="col-xs-4">
	              <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
	            </div><!-- /.col -->
	          </div>
	          
	        </form>

	        <div class="social-auth-links text-center">
	          <p>- OR -</p>
	          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using Facebook</a>
	          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>
	        </div><!-- /.social-auth-links -->
	        <div class="social-auth-links text-center">
	          <p>- OR -</p>
	          
	          I already have a membership
	          
	          <a href="{{url('auth/login')}}" class="member-links member-register-link btn btn-info">Login now<i class="fa fa-long-arrow-right"></i></a></span>
	        </div>
	      </div><!-- /.login-box-body -->
	    </div>
	</div>	
</div>
<!-- Modal -->
<div class="modal fade" id="checklist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Account verification Checklist </h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Got it </button>
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
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
