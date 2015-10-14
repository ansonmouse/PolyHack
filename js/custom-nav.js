// JavaScript Document

//Add/Remove nav background when scroll
$(window).scroll(function(){
	if(window.pageYOffset >= 20 && $(window).width() > 767) {
		$('#navBar').addClass('navFix');
		if($( "#navBar" ).hasClass( "inverse" )) {
			$('#navBar').addClass('navFixWhite');
		} else {
			$('#navBar').addClass('navFixBlack');
		}
		if($('body').has($('#top-fill-height'))) {
			$('#top-fill-height').removeClass('top');
		} else {
			$('$page-top').addClass('refillTop');
		}
	} else {
		$('#navBar').removeClass('navFix');
		if($( "#navBar" ).hasClass( "inverse" )) {
			$('#navBar').removeClass('navFixWhite');
		} else {
			$('#navBar').removeClass('navFixBlack');
		}
		if($('body').has($('#top-fill-height'))) {
			$('#top-fill-height').addClass('top');
		} else {
			$('body').removeClass('refillTop');
		}
	}
});
//Smooth scroll
/*
$(function() {
$('a[href*=#]:not([href=#])').click(function() {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    if (target.length) {
      $('html,body').animate({
        scrollTop: target.offset().top-100
      }, 800);
      return false;
    }
  }
});
});
*/