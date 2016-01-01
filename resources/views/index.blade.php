@extends('mainlayout')

@section('container')
<div class="container-fullwidth">
	<div id="home">
		
	</div>
</div>
<div id="home" class="scroll-section root-sec grey lighten-5 home-wrap">
	<div class="sec-overlay">
	<div class="container">
	  <div class="row">
	    <div class="col-sm-12">
	      <div class="home-inner">
	          <div class="center-align home-content">
	            <h1 class="home-title">Let's <span>Get you a job</span></h1>
	            <h2 class="home-subtitle">First online job portal to bring core jobs from Indusrty to you directly ( without any constultant charge)</h2>
	            <a href="#contact" class="hire-me-btn btn waves-effect waves-light btn-large brand-bg white-text regular-text">Upload Your profile<i class="material-icons left">backup</i>
	            </a>
	          </div>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- .container end -->
	<div class="section-call-to-area">
	  <div class="container">
	    <div class="row">
	      <a href="#about" class="btn-floating btn-large button-middle call-to-about section-call-to-btn animated btn-show" data-section="#about">
	        <i class="mdi-navigation-expand-more"></i>
	      </a>
	    </div>
	  </div>
	  <!-- .container end -->
	</div>
	</div>
</div>

<div class="container scroll-section root-sec padd-tb-60 white lighten-5 about-wrap">
	<div class="section">
	  <!--   Icon Section   -->
	  <div class="row">
	    <div class="col s12 m4 eachfeature">
	      <div class="icon-block">
	        <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
	        <h5 class="center">Speeds up development</h5>

	        <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
	      </div>
	    </div>

	    <div class="col s12 m4 eachfeature">
	      <div class="icon-block">
	        <h2 class="center brown-text"><i class="material-icons">group</i></h2>
	        <h5 class="center">User Experience Focused</h5>

	        <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
	      </div>
	    </div>

	    <div class="col s12 m4 eachfeature">
	      <div class="icon-block">
	        <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
	        <h5 class="center">Easy to work with</h5>

	        <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
	      </div>
	    </div>
	  </div>

	</div>
</div>

@include('footer')

@stop