<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title>GIA Academy | Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!-- <meta name="keywords" content="GIA Academy" /> -->
	<link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url()?>css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url()?>css/team.css" rel="stylesheet" type="text/css" media="all" />
	<link href="<?php echo base_url()?>css/style.css" rel="stylesheet" type="text/css" media="all"/>
	<link href='<?php echo base_url()?>//fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href='<?php echo base_url()?>//fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css'>
	<script src="<?php echo base_url()?>js/modernizr.js"></script>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- navigation -->
<section class="navigation">
	<div class="navbar-wrapper">
	    <div class="container">
			<nav class="navbar navbar-inverse navbar-static-top cl-effect-1">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html"><h1>GIA Academy</h1></a>
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#service">Service</a></li>
							<li><a href="#gallery">Gallery</a></li>
							<li><a href="#team">Team</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div>
				</div>
	        </nav>
		</div>
	</div>
</section>

<section class="banner">
	<div class="cover-slider__wrap">
		<ul class="cover-slider">
			<li class="cover-slider__slide">
				<span class="hide">Alt Tag</span>
			</li>
			<li class="cover-slider__slide">
				<span class="hide">Alt Tag</span>
			</li>
			<li class="cover-slider__slide">
				<span class="hide">Alt Tag</span>
			</li>
		</ul>
	</div>
</section>	

<section class="about-us" id="about">
	<div class="container-fluid">
		<div class="row">	
			<div class="col-lg-6 about-info1 slideanim">
				<img src="<?php echo base_url()?>images/about.png" alt="about" class="img-responsive">
			</div>
			<div class="col-lg-6 about-info2 slideanim">
				<div class="about-details">
					<h2>Garuda Indonesia</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500.</p>
				</div>	
			</div>
		</div>
	</div>		
</section>

<section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="links">
					<a href="index.html">Home</a>
					<a href="#about">About</a>
					<a href="#service">Services</a>
					<a href="#gallery">Gallery</a>
					<a href="#team">Team</a>
					<a href="#contact">Contact</a>
				</div>
			</div>
			<div class="col-md-6">
				<div class="copyright" align="center">
					<p>&copy; 2018 Garuda Indonesia. All Rights Reserved</p>
				</div>
			</div>
		</div>
	</div>
</section>

<script src="<?php echo base_url()?>js/jquery.min.js"></script>
<script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>js/SmoothScroll.min.js"></script>
<!-- js for banner -->
<script src="<?php echo base_url()?>js/index.js"></script>
<!-- /js for banner -->
<!-- js for gallery -->
<script src="<?php echo base_url()?>js/darkbox.js"></script>
<!-- /js for gallery -->
<!-- js for smooth navigation -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})
</script>
<!-- /js for smooth navigation -->
<!-- js for sliding animations -->
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
</body>
</html>