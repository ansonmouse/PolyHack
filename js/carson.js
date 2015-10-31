 	$("#intro").css({ minHeight: $(window).innerHeight()+60 + 'px' });
 	$("#top-fill-height").css({ minHeight: $(window).innerHeight()*0.92 + 'px' });
  $(window).resize(function() {
    $("#intro").css({ minHeight: $(window).innerHeight()+60 + 'px' });
    $("#top-fill-height").css({ minHeight: $(window).innerHeight()*0.92 + 'px' });
  });
$(window).trigger('resize');