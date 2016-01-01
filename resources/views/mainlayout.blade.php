<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MyworkDetails | First online job portal to bring core jobs from Indusrty to you directly ( without any constultant charges)</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

	<!-- Favicon-->
	<link rel="shortcut icon" href="favicon.ico" >

	<!-- Stylesheets -->
	<!-- <link rel="stylesheet" href="{{URL::asset('assets/css/normalize.css')}}"> -->
	<!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
	<link rel="stylesheet" href="{{URL::asset('assets/font-awesome-4.3.0/css/font-awesome.min.css')}}">
	<!-- <link rel="stylesheet" href="{{URL::asset('assets/css/materialize.min.css')}}" media="screen,projection" /> -->
	<link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}" media="screen,projection" />

	<link rel="stylesheet" href="{{URL::asset('assets/css/animate.min.css')}}" media="screen,projection" />
	<link rel="stylesheet" href="{{URL::asset('assets/sweetalert/dist/sweetalert.css')}}" media="screen,projection" />

	<link rel="stylesheet" href="{{URL::asset('assets/owl-carousel/owl.carousel.css')}}" media="screen,projection" />
	<link rel="stylesheet" href="{{URL::asset('assets/owl-carousel/owl.transitions.css')}}" media="screen,projection" />
	<link rel="stylesheet" href="{{URL::asset('assets/owl-carousel/owl.theme.css')}}" media="screen,projection" />

	<!-- <link rel="stylesheet" href="{{URL::asset('assets/css/main.css')}}"> -->
	<link rel="stylesheet" href="{{URL::asset('assets/css/AdminLTE.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/icheck-1.x/skins/square/blue.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
	<!-- <link rel="stylesheet" href="{{URL::asset('assets/css/responsive.css')}}"> -->

	<!-- Choose your default colors -->
	<!-- <link rel="stylesheet" href="{{URL::asset('assets/css/color1.css')}}"> -->

	<script type="text/javascript">
	var apppath = "{{url('/')}}";
	</script>

</head>
<body>
	<div id="myworkdetails">
	  	<div id="header">
	  		<nav class="navbar navbar-default navbar-fixed-top">
			      <div class="container">
			        <div class="navbar-header">
			          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			          </button>
			          <a class="navbar-brand" href="#">
			          	<img src="{{URL::asset('images/logo-jobmonster.png')}}">
			          </a>
			        </div>
			        <div id="navbar" class="navbar-collapse collapse">
			          <ul class="nav navbar-nav">
			            <li class="active"><a href="{{url('/')}}">Home</a></li>
			            <li><a href="#about">Universities</a></li>
			            <li><a href="#">Post a Job</a></li>
			            <li><a href="#">Search a Job</a></li>
			            
			          </ul>
			          <ul class="nav navbar-nav navbar-right">
			            
			            <li><a href="{{url('auth/login')}}" class="member-links member-login-link sf-with-ul"><i class="fa fa-sign-in"></i>&nbsp;Login</a></li>
			            <li class="active"><a class="member-links member-register-link" href="{{url('auth/register')}}"><i class="fa fa-key"></i>&nbsp;Register</a></li>
			          </ul>
			        </div><!--/.nav-collapse -->
			      </div>
			</nav>
		  	<!-- <nav class="blue" role="navigation">
			    <div class="nav-wrapper container">
			      <a id="logo-container" href="{{url('/')}}" class="brand-logo">My<span>Work</span>Details</a>
			      <ul class="right hide-on-med-and-down side-nav-custom">
			      	<li><a href="#">Internships</a></li>
			      	<li><a href="#">Jobs</a></li>
			        <li><a href="{{url('auth/login')}}">Login</a></li>
			      </ul>

			      <ul id="nav-mobile" class="side-nav" style="left: -250px;">
			        <li><a href="#">Internships</a></li>
			        <li><a href="#">Jobs</a></li>
			        <li><a href="#">Login</a></li>
			      </ul>
			      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
			    </div>
			</nav> -->
		</div>
		<div id="maincontainer">
			@yield('container')
		</div>
	</div>

	<!-- JavaScripts -->
	<script type="text/javascript" src="{{URL::asset('assets/js/jquery-2.1.1.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/jquery.easing.1.3.js')}}"></script>
	<script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
	<!--<script src="{{URL::asset('assets/js/detectmobilebrowser.js')}}"></script>-->
	<script src="{{URL::asset('assets/js/isotope.pkgd.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/wow.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/waypoints.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/jquery.counterup.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/jquery.nicescroll.min.js')}}"></script>
	<!--<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="{{URL::asset('assets/js/gmaps.js')}}"></script>-->
	<script src="{{URL::asset('assets/owl-carousel/owl.carousel.min.js')}}"></script>
	<!--<script src="{{URL::asset('assets/js/materialize.min.js')}}"></script>-->
	<!--<script src="{{URL::asset('assets/js/jwplayer/src/js/jwplayer.js')}}"></script>-->
	<script src="{{URL::asset('assets/sweetalert/dist/sweetalert.min.js')}}"></script>
	<!--<script src="{{URL::asset('assets/js/common.js')}}"></script>-->
	<script src="{{URL::asset('assets/js/typeahead.js')}}"></script>

	<!--<script src="{{URL::asset('assets/js/main.js')}}"></script>-->
	<script src="{{URL::asset('assets/noty/packaged/jquery.noty.packaged.min.js')}}"></script>
	<script src="{{URL::asset('assets/icheck-1.x/icheck.min.js')}}"></script>
	<!--<script src="{{URL::asset('app/auth.js')}}"></script>-->
	<script type="text/javascript">
	$.noty.defaults = {
	    layout: 'topCenter',
	    theme: 'relax', // or 'relax'
	    type: 'alert',
	    text: '', // can be html or string
	    dismissQueue: true, // If you want to use queue feature set this true
	    template: '<div class="noty_message"><span class="noty_text"></span><div class="noty_close"></div></div>',
	    animation: {
	        open: {height: 'toggle'}, // or Animate.css class names like: 'animated bounceInLeft'
	        close: {height: 'toggle'}, // or Animate.css class names like: 'animated bounceOutLeft'
	        easing: 'swing',
	        speed: 500 // opening & closing animation speed
	    },
	    timeout: false, // delay for closing event. Set false for sticky notifications
	    force: false, // adds notification to the beginning of queue when set to true
	    modal: false,
	    maxVisible: 10, // you can set max visible notification for dismissQueue true option,
	    killer: false, // for close all notifications before show
	    closeWith: ['click'], // ['click', 'button', 'hover', 'backdrop'] // backdrop click will close all notifications
	    callback: {
	        onShow: function() {},
	        afterShow: function() {},
	        onClose: function() {},
	        afterClose: function() {},
	        onCloseClick: function() {},
	    },
	    buttons: false // an array of buttons
	};
	function notification(type,message)
	{
		var n = noty({
		    text: message,
		    type: type,
		    animation: {
		        open: 'animated bounceInUp', // Animate.css class names
		        close: 'animated bounceOutUp', // Animate.css class names
		        easing: 'swing', // unavailable - no need
		        speed: 500 // unavailable - no need
		    }
		});
	}
	</script>
	@section('footerjs')

	@show
</body>
</html>