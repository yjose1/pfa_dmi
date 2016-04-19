
jQuery(function($){


	/* ----------------------------------------------------------- */
  /*  1. DROPDOWN MENU
  /* ----------------------------------------------------------- */

   // for hover dropdown menu
  $('ul.nav li.dropdown').hover(function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(200);
    }, function() {
      $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(200);
    });
	
	/* ----------------------------------------------------------- */
	/*  2. SUPERSLIDES SLIDER
	/* ----------------------------------------------------------- */
	$('#slides').superslides({
      animation: 'fade',
      animation_easing: 'linear',
      pagination: 'true'

    });
	





	  $(window).scroll(function(){
        if ($(this).scrollTop() > 300) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
/*
    $(window).scroll(function(){

        if ($(this).scrollTop() > 300) {
            $('#nav-pr').fadeOut();
            $('#nav-sc').fadeIn();
        } else {
            $('#nav-sc').removeClass('hidden');
            $('#nav-sc').fadeOut();
            $('#nav-pr').fadeIn();

        }
    });
    */
	   
	  //Click event to scroll to top

	  $('.scrollToTop').click(function(){
	    $('html, body').animate({scrollTop : 0},800);
	    return false;
	  });
});