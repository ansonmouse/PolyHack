<?php $page_name='Home'; ?>
<?php include 'layout/header.php' ?>
<?php include 'layout/nav_dark.php' ?>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-69265245-1', 'auto');
	ga('send', 'pageview');

</script>
<link href="css/index.css" rel="stylesheet">
<link href="css/index_carson.css" rel="stylesheet">

<!-- Main Content -->
<div class="container-fluid fill-height top top-banner wow fadeIn top_new"
	 id="top-fill-height">
	<div id="video-frame">
		<video autoplay loop muted poster="image/poly-flyby/home_bg.jpg" id="bgvid">
			<source src="image/poly-flyby/home_bg.mp4" type="video/mp4">
		</video>
	</div>
	<!-- First Fill Content -->
	<div class="row text-center" id="countDownFrame">
		<h1>The PolyU Hackathon</h1>
		<div id="countDown"></div>
		<h2>to go</h2>
	</div>
	<div class="row text-center" id="applicationFrame">
		<button class="btn btn-default">Join The Briefing Section NOW</button>
		<h3 class="light">6:45 PM • Nov 13</h3>
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
<section id="main" class="section-scroll">
	<div id="intro" class="container-fluid light text-center intro-text">
		<div class="row"><div class="col-sm-12 wow fadeInUp" data-wow-delay="0s"><h1>More Than Just Coding</h1></div></div>
		<div class="row"><div class="col-sm-12 wow fadeInUp" data-wow-delay="0.25s">
				<p>
					Tired of programming just for assignments, projects and want to make something really useful? Or you have a killer idea in mind for a long time but did not have the opportunity to realize it? This is what PolyHack is all about! Whether you are a programmer, designer or PolyU students from other discipline who have an idea but do not have what it takes to realize your dream, PolyHack is the place for you. In PolyHack you meet people of different talents, through 24 hours of trial and error, you make your dreams come true!
				</p>
			</div></div>
	</div>
	<div class="container-fluid gap">
		<div class="row text-center" id="introRow">
			<div class="col-sm-4">
				<div class="wow zoomIn" data-wow-delay="0.25s">
					<div id="circle" class="divCenter"
						 style="background-image: url(image/clock.svg); background-color: rgba(104, 199, 198, 1.00)">
					</div>
					<h1>24 Hours</h1>
				</div>
				of non stop innovation
			</div>
			<div class="col-sm-4">
				<div class="wow zoomIn" data-wow-delay="0.5s">
					<div id="circle" class="divCenter"
						 style="background-image: url(image/light_bulb.svg); background-color: rgba(213, 215, 83, 1.00)">
					</div>
					<h1>One Idea</h1>
				</div>
				with unlimited potential
			</div>
			<div class="col-sm-4">
				<div class="wow zoomIn" data-wow-delay="0.75s">
					<div id="circle" class="divCenter"
						 style="background-image: url(image/hamer.svg); background-color: rgba(178, 128, 84, 1.00)">
					</div>
					<h1>One Prototype</h1>
				</div>
				that turns your dream into reality
			</div>
		</div>
	</div>
	<div class="container-fluid gap"
		 style="background-color: rgba(161, 39, 67, 1.00)">
		<div class="row">
			<div class="col-sm-6 detail-left wow slideInLeft light"
				 data-wow-delay="0.25s" id="mapText">
				<h1>The Main Event</h1>
				<table class="main-event-detail-table">
					<tr>
						<td class="title"><h3>Date</h3></td>
						<td><h3>23 - 24 Jan 2016</h3></td>
					</tr>
					<tr>
						<td class="title"><h3>Venue</h3></td>
						<td><h3>PolyU, Hong Kong</h3></td>
					</tr>
					<tr>
						<td class="title"><h3>Fee</h3></td>
						<td><h3>Free!</h3></td>
					</tr>
				</table>
			</div>
			<div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.304062613272!2d114.17860556128922!3d22.304337461803957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x5aeb1a34766d7fa0!2z6aaZ5riv55CG5bel5aSn5a24!5e0!3m2!1szh-TW!2shk!4v1445846987169"
					class="map" allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<div class="container-fluid gap">
		<div class="row">
			<div class="col-sm-6 text-center wow fadeInUp" data-wow-delay="0.25s">
				<img src="image/trophy.svg" height="300">
			</div>
			<div class="col-sm-6 detail-right wow fadeInUp" data-wow-delay="0.5s">
				<h1>The PolyHack Award</h1>
				<h2>Awards with up to $7,500 cash prize.</h2>
				<ul>
					<li>Gold, Silver and Bronze award</li>
					<li>Best theme product award</li>
					<li>Best audience award</li>
				</ul>
				<br> <!-- <a href="#">More detail on the awards ></a> -->
			</div>
		</div>
	</div>
	<div class="container-fluid"
		 style="background-color: rgba(197, 124, 89, 1.00)" name="contact" id="contact">
		<h1 class="light detail-left">Talk to Us</h1>
		<form class="form-horizontal" role="form">
			<div class="form-group wow fadeInUp" data-wow-delay="0.25s">
				<label for="name" class="control-label col-sm-2">Name: </label>
				<div class="col-sm-10">
					<input type="text" class="form-control text" name="name" id="name">
				</div>
			</div>
			<div class="form-group wow fadeInUp" data-wow-delay="0.5s">
				<label for="email" class="control-label col-sm-2">Email: </label>
				<div class="col-sm-10">
					<input type="email" class="form-control text" name="email" id="email">
				</div>
			</div>
			<div class="form-group wow fadeInUp" data-wow-delay="0.75s">
				<label for="message" class="control-label col-sm-2">Message: </label>
				<div class="col-sm-10">
				<textarea class="form-control text" name="message" id="message"
						  style="height: 142px;"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-10 wow fadeInUp" data-wow-delay="1s">
					<input type="submit" name="submit" class="btn btn-default submit" value="Send">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-10 text-center">
					<span id="email-send-success" class="light">Your email has been sent successfully.  Thank you.</span>
					<span id="email-send-missing" class="light">Please provide all information</span>
					<span id="email-send-fail" class="light">There were some problems on the email.  Please try again later or send via <a href="mailto:polyhack@comp.polyu.edu.hk?Subject=PolyHack%20Enquiry" target="_top">polyhack@comp.polyu.edu.hk</a></span>
				</div>
			</div>
		</form>
	</div>
<?php
if(isset($_GET['submit'])) {
	$email = $_GET['email'];
	$name = $_GET['name'];
	$message = $_GET['message'];
	$message = wordwrap($message, 70);
	if($email == '' || $name == '' || $message == '') {
		?><script>document.getElementById('email-send-missing').style.display = 'inline';location.hash = "#contact";</script><?php
	} else {
		//if(mail("polyhack@comp.polyu.edu.hk","Enquiry Form",$message, $email)) {
			if(mail("ansonmouse@me.com","PolyHack Enquiry Form", $message, $email)) {
			?><script>document.getElementById('email-send-success').style.display = 'inline';location.hash = "#contact";</script><?php
		} else {
			?><script>document.getElementById('email-send-fail').style.display = 'inline';location.hash = "#contact";</script><?php
		}
	}
}
?>
<!-- End of Main Content -->
<?php include 'layout/bottom.php' ?>
</section>
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
		.countdown("2016/01/30 10:00:00", function(event) {
			$(this).text(
				event.strftime('%-D days %-H hr %M min %S sec')
			);
		});
</script>
<script>
	try{
		document.createEvent("TouchEvent");
		document.body.style.backgroundImage = 'url("../image/poly-flyby/home_bg.jpg")';
		document.body.style.backgroundPosition = 'center center';
		document.body.style.backgroundSize = 'cover';
		document.body.style.backgroundRepeat = 'no-repeat';
	} catch(e) {
		document.getElementById('video-frame').style.display = 'inline';
	}
</script>
<script src="js/carson.js"></script>