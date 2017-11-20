(function($){

	"use strict";

	const $win = $(window), $coverBlurry = $("#cover-blur");

	$('document').ready(function(){
		// $("#page-wrapper").css("transform", "translateY(-50px)");
	});

	$win.scroll(function(){
		scrollBlur();
	});

	$(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});

	function scrollBlur(){
		var scrollPos = $win.scrollTop();
		var coverHeight = $win.height();
		if( scrollPos === 0 ){
			$coverBlurry.css( "opacity", 1 );
			$coverBlurry.css( "filter", "blur(0px)" );
			$coverBlurry.css( "transform", "translateY(0px) rotateX(0deg)" );
		} else if( scrollPos <= coverHeight ){
			$coverBlurry.css( "opacity", (1 - ( scrollPos / coverHeight )*0.5) );
			$coverBlurry.css( "filter", "blur("+ (10 * ( scrollPos / coverHeight )) +"px)" );
			$coverBlurry.css( "transform", "translateY("+ (1 - (.85 * ((coverHeight / 2) * (scrollPos / coverHeight))) ) +"px) rotateX("+ (scrollPos/coverHeight) * 55 +"deg) scale("+ (1 - (scrollPos/coverHeight) * 0.2) +")" );
		} else {
			$coverBlurry.css( "opacity", 0 );
			$coverBlurry.css( "filter", "blur(10px)" );
		}
	}

    // TODO make this modular
	$( "#deck_plate-toggle" ).click(function() {
		if ( $("#deck_plate-toggle").hasClass("active") ) {

			$("#deck_plate-toggle").removeClass("active");
			$("#deck_plate").removeClass("active");
			$("#slider_nav").removeClass("active");
			$("#cover-wrapper").removeClass("active");
			$("#bilge").removeClass("active");

		} else {

			$("#deck_plate-toggle").addClass("active");
			$("#deck_plate").addClass("active");
			$("#slider_nav").addClass("active");
			$("#cover-wrapper").addClass("active");
			$("#bilge").addClass("active");

		}
	});

})(jQuery);
