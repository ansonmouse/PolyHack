<?php $page_name='Home'; ?>
<?php include 'layout/header.php' ?>
<?php include 'layout/nav_dark.php' ?>
<link href="css/index.css" rel="stylesheet">
<!-- Main Content -->
<div class="container-fluid fill-height top top-banner wow fadeIn"
	id="top-fill-height">
	<video autoplay loop muted poster="image/poly-flyby/home_bg.jpg" id="bgvid">
      <source src="image/poly-flyby/home_bg.mp4" type="video/mp4">
    </video>
	<!-- First Fill Content -->
	<div class="row text-center" id="countDownFrame">
		<div id="countDown"></div>
	</div>
	<div class="row text-center" id="applicationFrame">
		<!-- <button class="btn btn-default">Join Now</button> -->
	</div>
	<a class="page-scroll" href="#main">
		<div class="scroll-down row" id="scroll-down">
			<div class="col-md-12 text-center wow bounce"
				data-wow-iteration="infinite" data-wow-delay="2s">
				<img src="image/scroll-down-arrow.svg">
			</div>
		</div>
	</a>
	<div class="row logos">
		<a href="http://www.polyu.edu.hk" target="_blank"><img
			src="image/PolyU_light.png"></a> <a
			href="http://www.comp.polyu.edu.hk" target="_blank"><img
			src="image/Comp_light.png"></a> <a href="http://su.polyu.edu.hk"
			target="_blank"><img src="image/HKPUSU_light.png"></a>
	</div>
	<div class="row social-icons">
		<a href="https://www.facebook.com" target="_blank"><img
			src="image/facebook.svg" class="wow bounceInUp"></a> <a
			href="https://instagram.com" target="_blank"><img
			src="image/instagram.svg" class="wow bounceInUp"
			data-wow-delay="0.2s"></a> <a href="https://twitter.com"
			target="_blank"><img src="image/twitter.svg" class="wow bounceInUp"
			data-wow-delay="0.3s"></a>
	</div>
</div>
<!-- <a name="main"></a> -->
<section id="main" class="section-scroll">
	<div class="container-fluid">
		<div class="row text-center" id="introRow">
			<div class="col-sm-4">
				<div class="wow zoomIn" data-wow-delay="0.25s">
					<div id="circle" class="divCenter"
						style="background-image: url(image/clock.svg); background-color: rgba(104, 199, 198, 1.00)">
					</div>
					<h1>24 Hours</h1>
				</div>
				For non stop creativity
			</div>
			<div class="col-sm-4">
				<div class="wow zoomIn" data-wow-delay="0.5s">
					<div id="circle" class="divCenter"
						style="background-image: url(image/light_bulb.svg); background-color: rgba(213, 215, 83, 1.00)">
					</div>
					<h1>One Idea</h1>
				</div>
				Unlimited potential
			</div>
			<div class="col-sm-4">
				<div class="wow zoomIn" data-wow-delay="0.75s">
					<div id="circle" class="divCenter"
						style="background-image: url(image/hamer.svg); background-color: rgba(178, 128, 84, 1.00)">
					</div>
					<h1>One Prototype</h1>
				</div>
				Turn your dreams into reality
			</div>
		</div>
	</div>
</section>
<div class="container-fluid"
	style="background-color: rgba(161, 39, 67, 1.00)">
	<div class="row">
		<div class="col-sm-6 detail-left wow slideInLeft light"
			data-wow-delay="0.75s" id="mapText">
			<h1>The Main Event</h1>
			<h3>Date: 30 - 31 Jan 2016</h3>
			<h3>Venue: 13/F, School of Design, PolyU</h3>
			<h3>Fee: Free!</h3>
		</div>
		<div class="col-sm-6 wow fadeIn" data-wow-delay="1s">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d922.826630192342!2d114.17866159999998!3d22.304244450000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x340400e88eff5c0b%3A0x2115ebe28edcbee!2z6aaZ5riv57SF56Oh6aaZ5riv55CG5bel5aSn5a246YK16YC45aSr6auU6IKy6aSo!5e0!3m2!1szh-TW!2s!4v1438762921763"
				class="map" allowfullscreen></iframe>
		</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-6 text-center wow fadeInUp" data-wow-delay="0.75s">
			<img src="image/trophy.png" height="300">
		</div>
		<div class="col-sm-6 detail-right wow fadeInUp" data-wow-delay="1s">
			<h1>The PolyHack Award</h1>
				<ul>
					<li>Gold, Silver and Bronze award</li>
					<li>Best theme product award</li>
					<li>Best audience award</li>
				</ul>
			<br> <a href="#">More detail on the awards ></a>
		</div>
	</div>
</div>
<div class="container-fluid"
	style="background-color: rgba(197, 124, 89, 1.00)">
	<h1 class="light detail-left">Talk to Us</h1>
	<form class="form-horizontal" role="form">
		<div class="form-group wow fadeInUp" data-wow-delay="0.7s">
			<label for="name" class="control-label col-sm-2">Name: </label>
			<div class="col-sm-10">
				<input type="text" class="form-control text" name="name" id="name">
			</div>
		</div>
		<div class="form-group wow fadeInUp" data-wow-delay="0.8s">
			<label for="email" class="control-label col-sm-2">Email: </label>
			<div class="col-sm-10">
				<input type="text" class="form-control text" name="email" id="email">
			</div>
		</div>
		<div class="form-group wow fadeInUp" data-wow-delay="1s">
			<label for="message" class="control-label col-sm-2">Message: </label>
			<div class="col-sm-10">
				<textarea class="form-control text" name="message" id="message"
					style="height: 142px;"></textarea>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-2"></div>
			<div class="col-sm-10 wow fadeInUp" data-wow-delay="1.25s">
				<button type="submit" class="btn btn-default submit">Submit</button>
			</div>
		</div>
	</form>
</div>
<!-- End of Main Content -->
<?php include 'layout/bottom.php' ?>
<script>
(function() {
  $(window).scroll(function() {
    var oVal;
    oVal = $(window).scrollTop() / 240;
    return $(".blur").css("blur", oVal);
  });

}).call(this);
</script>
<script src="js/jquery.countdown.js"></script>
<script type="text/javascript">
 //Count down counter
   $("#countDown")
   .countdown("2016/01/23 10:00:00", function(event) {
     $(this).text(
       event.strftime('%-D days %-H hr %M min %S sec')
     );
   });
</script>
