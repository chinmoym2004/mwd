<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MaterialX - Material Design Personal Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

	<!-- Favicon-->
	<link rel="shortcut icon" href="favicon.ico" >

	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{URL::asset('assets/css/normalize.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/font-awesome-4.3.0/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/materialize.min.css')}}" media="screen,projection" />
	<link rel="stylesheet" href="{{URL::asset('assets/css/bootstrap.min.css')}}" media="screen,projection" />

	<link rel="stylesheet" href="{{URL::asset('assets/css/animate.min.css')}}" media="screen,projection" />
	<link rel="stylesheet" href="{{URL::asset('assets/sweetalert/dist/sweetalert.css')}}" media="screen,projection" />

	<link rel="stylesheet" href="{{URL::asset('assets/owl-carousel/owl.carousel.css')}}" media="screen,projection" />
	<link rel="stylesheet" href="{{URL::asset('assets/owl-carousel/owl.transitions.css')}}" media="screen,projection" />
	<link rel="stylesheet" href="{{URL::asset('assets/owl-carousel/owl.theme.css')}}" media="screen,projection" />

	<link rel="stylesheet" href="{{URL::asset('assets/css/main.css')}}">
	<link rel="stylesheet" href="{{URL::asset('assets/css/responsive.css')}}">

	<!-- Choose your default colors -->
	<link rel="stylesheet" href="{{URL::asset('assets/css/color1.css')}}">

</head>
<body>

  	<nav class="blue" role="navigation">
	    <div class="nav-wrapper container">
	      <a id="logo-container" href="#" class="brand-logo">Logo</a>
	      <ul class="right hide-on-med-and-down side-nav-custom">
	      	<li><a href="#">Jobs</a></li>
	        <li><a href="#">Login</a></li>
	      </ul>

	      <ul id="nav-mobile" class="side-nav" style="left: -250px;">
	        <li><a href="#">Jobs</a></li>
	        <li><a href="#">Login</a></li>
	      </ul>
	      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
	    </div>
	</nav>

	@yield('container')

	<!-- JavaScripts -->
	<script type="text/javascript" src="{{URL::asset('assets/js/jquery-2.1.1.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/jquery.easing.1.3.js')}}"></script>
	<script src="{{URL::asset('assets/js/detectmobilebrowser.js')}}"></script>
	<script src="{{URL::asset('assets/js/isotope.pkgd.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/wow.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/waypoints.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/jquery.counterup.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/jquery.nicescroll.min.js')}}"></script>
	<!--<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="{{URL::asset('assets/js/gmaps.js')}}"></script>-->
	<script src="{{URL::asset('assets/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{URL::asset('assets/js/materialize.min.js')}}"></script>
	<!--<script src="{{URL::asset('assets/js/jwplayer/src/js/jwplayer.js')}}"></script>-->
	<script src="{{URL::asset('assets/sweetalert/dist/sweetalert.min.js')}}"></script>
	<!--<script src="{{URL::asset('assets/js/common.js')}}"></script>-->
	<script src="{{URL::asset('assets/js/main.js')}}"></script>

</body>
</html>