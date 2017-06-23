<!DOCTYPE html>
<!---
  __  __ _           _     _       ____                 _                                  _
 |  \/  (_) ___ __ _| |__ ( )___  |  _ \  _____   _____| | ___  _ __  _ __ ___   ___ _ __ | |_
 | |\/| | |/ __/ _` | '_ \|// __| | | | |/ _ \ \ / / _ \ |/ _ \| '_ \| '_ ` _ \ / _ \ '_ \| __|
 | |  | | | (_| (_| | | | | \__ \ | |_| |  __/\ V /  __/ | (_) | |_) | | | | | |  __/ | | | |_
 |_|  |_|_|\___\__,_|_| |_| |___/ |____/ \___| \_/ \___|_|\___/| .__/|_| |_| |_|\___|_| |_|\__|
                                                               |_|
	-->
<html lang="en">
<!--===============
      Micah's Development and Design
      CC 2017
      USE NOT FOR REUSE/RESALE
================-->
<head>
	<meta charset="utf-8">
	<title>micah.dev</title>
	<link rel="shortcut icon" type="image/x-icon" href="http://i.imgur.com/1tkk1DA.png" />
	<meta content="Adtile" name="author">
	<meta content="width=device-width,initial-scale=1" name="viewport">
	<link href="Hover-master/css/hover.css" rel="stylesheet">
	<link href="animate.css-master/animate.css" rel="stylesheet">
	<link href="featherlight/release/featherlight.min.css" rel="stylesheet">
	<script src="https://use.fontawesome.com/045f8af918.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
	<script src="js/WOW-master/dist/wow.min.js"></script>
	<script src="featherlight/src/featherlight.js"></script>
	<link href="css/styles.css" rel="stylesheet">
			<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <link rel="stylesheet" href="css/ie.css">
      <![endif]-->

	<script src="js/responsive-nav.js">
	</script>
	<script>
	new ANIMATE().init();
	</script>
</head>
<body>
<!--==========Navbar==========-->
<?php include_once("nav.php"); ?>
<!--==========Top Hero==========-->
<?php include_once("home-header.php"); ?>
<!--==========About==========-->
<div id="about" class="fullWidth">
	<div class="row">
		<div class="col s12 m12 l4">
			<h1 id="about-number" class="pacifico">01</h1>
		</div>
		<div class="col s12 m12 l8">
			<div id="about-text" class="ANIMATE fadeInRight container">
				<h1 id="section-title-left" class="maven">About <strong id="colored">Me</strong></h1>
				<br />
				<p id="section-pg-left" class="nunito">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </p>
				<br /><p id="section-pg-left" class="nunito">Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
				<br /><a href="#portfolio" id="section-btn-fill" class="maven">portfolio</a>
			</div>
		</div>
	</div>
</div>
<!--==========Call To Action==========-->
<div id="call-to-action" class="fullWidth">
	<div class="row">
		<div class="col s12 m12 l12">
			<h1 id="section-title-white-center" class="maven">Impressed already?&nbsp;&nbsp;&nbsp;&nbsp;<a href="#contact" id="section-btn-border" class="maven">contact</a></h1>
		</div>
	</div>
</div>
<!--==========Portfolio==========-->
<div id="portfolio" class="fullWidth">
	<div class="row">
		<div class="col s12 m12 l12">
		</div>
	</div>
	<div style="padding-top: 3em;" class="row">
		<div class="container">
		<!--========Portfolio Item 1========-->
		<div class="col s12 m12 l4">
			<!---<img id="portfolio-item-image" src="http://i.imgur.com/psxRqyA.png" />--->
			<div id="portfolio-item">
				<h3 id="portfolio-item-title" class="maven">PlugHost.dk</h3>
				<p id="portfolio-item-type" class="nunito">Hosting Company // 2017</p>
				<a id="portfolio-view-image" href="#" class="maven">View Image</a>&nbsp;&nbsp;&nbsp;<a id="portfolio-visit-site" href="#" class="maven">Visit Site</a>
			</div>
		</div>

		<div class="col s12 m12 l4">

			<div id="portfolio-item">
				<h3 id="portfolio-item-title" class="maven">PlugHost.dk</h3>
				<p id="portfolio-item-type" class="nunito">Hosting Company // 2017</p>
				<a id="portfolio-view-image" href="#" class="maven">View Image</a>&nbsp;&nbsp;&nbsp;<a id="portfolio-visit-site" href="#" class="maven">Visit Site</a>
			</div>
		</div>

		<div class="col s12 m12 l4">

			<div id="portfolio-item">
				<h3 id="portfolio-item-title" class="maven">PlugHost.dk</h3>
				<p id="portfolio-item-type" class="nunito">Hosting Company // 2017</p>
				<a id="portfolio-view-image" href="#" class="maven">View Image</a>&nbsp;&nbsp;&nbsp;<a id="portfolio-visit-site" href="#" class="maven">Visit Site</a>
			</div>
		</div>
		</div>
	</div>
</div>
<!--==========Pricing==========-->
<div id="pricing" class="fullWidth">
	<div class="row">
		<div class="col s12 m12 l12">
		</div>
	</div>
</div>
<!--==========Footer==========-->
<?php include_once("footer.php"); ?>


		<script src="js/slider.js">
		</script>
		<script src="js/fastclick.js">
		</script>
		<script src="js/scroll.js">
		</script>
		<script src="js/fixed-responsive-nav.js">
		</script>
		<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
		  showSlides(slideIndex += n);
		}

		function currentSlide(n) {
		  showSlides(slideIndex = n);
		}

		function showSlides(n) {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  if (n > slides.length) {slideIndex = 1}
		  if (n < 1) {slideIndex = slides.length}
		  for (i = 0; i < slides.length; i++) {
		      slides[i].style.display = "none";
		  }
		  for (i = 0; i < dots.length; i++) {
		      dots[i].className = dots[i].className.replace(" activeDot", "");
		  }
		  slides[slideIndex-1].style.display = "block";
		  dots[slideIndex-1].className += " activeDot";
		}
		</script>
		<script>
		$(window).scroll(function(){
		  var x = $(this).scrollTop(),
		      transY = (x * 0.5), scale = 1 + (x * 0.0003),
		      transform = 'translateY('+transY+'px) scale('+scale+') translate3d(0,0,0)';
		  $('#home .home-bg').css({
		    opacity: 1 - (x * 0.0008),
		    WebkitTransform: transform,
		    MozTransform: transform,
		    msTransform: transform,
		    transform: transform
		  });
		});
		</script>
		<script>
		(function($) {

// Open Lightbox
$('.open-lightbox').on('click', function(e) {
e.preventDefault();
var image = $(this).attr('href');
$('html').addClass('no-scroll');
$('body').append('<div class="lightbox-opened"><img src="' + image + '"></div>');
});

// Close Lightbox
$('body').on('click', '.lightbox-opened', function() {
$('html').removeClass('no-scroll');
$('.lightbox-opened').remove();
});

})(jQuery);
		</script>
	</div>
</body>
</html>
