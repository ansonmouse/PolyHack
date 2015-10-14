<?php include 'layout/header.php' ?>
<title><?php include 'layout/title_prefix.php' ?>Test Height<?php include 'layout/title_suffix.php' ?></title>
<!-- Main Content -->
<style>
.blur {
	-webkit-filter: blur(0px);
	filter: blur(0px);
}
video#video{
	position: fixed;
	top: 50%;
	left: 50%;
	min-width:100%;
	min-height:100%;
	width:auto;
	height:auto;
	z-index: -100;
	-webkit-transform: translateX(-50%) translateY(-50%);
	transform: translateX(-50%) translateY(-50%);
	background-image:url(video/test.jpg);
	background-size:cover;
}
</style>
<!--
<video autoplay loop muted poster="video/test.jpg" id="video" class="blur">
<source src="video/test_s.mp4" type="video/mp4">
</video>
-->
<div class="container-fluid fill-height top" style=" background-image:url(video/test.jpg);">
<!-- First Fill Content -->
</div>
<div class="container-fluid fill-height">
<h1>Testing</h1>
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