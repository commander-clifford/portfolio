(function($){

	"use strict";

	var $win = $(window),
	$cover = $("#cover"),
	$coverContainer = $("#cover-container"),
	$coverHeadline = $("#cover-headline"),
	$innerWrapper = $("#under_cover-wrapper"),
	$homeAvatar = $("#home-avatar");

	$(document).ready(function(){
		fitui();
	});

	$win.resize(function(){
		fitui();
	});

	$win.scroll(function(){
		scrollBlur();
	});

	$(function(){
		$('[data-toggle="tooltip"]').tooltip()
	});

	function fitui(){
		$cover.height( $win.height() );
		$coverContainer.css("top", "calc( 50% - " + $coverContainer.height()/2 + "px)");
		$innerWrapper.css("margin-top", $win.height()+"px");
	}

	function scrollBlur(){
		var scrollPos = $win.scrollTop();
		var coverHeight = $cover.height();
		if( scrollPos === 0 ){
			// $homeAvatar.removeClass("active").addClass("deactivate");
			$coverContainer.css( "opacity", 1 );
			$coverContainer.css( "filter", "blur(0px)" );
			$coverContainer.css( "transform", "translateY(0px)" );
		} else if( scrollPos <= coverHeight ){
			// $homeAvatar.removeClass("deactivate").addClass("active");
			$coverContainer.css( "opacity", (1 - ( scrollPos / coverHeight )) );
			$coverContainer.css( "filter", "blur("+ (10 * ( scrollPos / coverHeight )) +"px)" );
			$coverContainer.css( "transform", "translateY("+ (1 - (.75 * ((coverHeight / 2) * (scrollPos / coverHeight))) ) +"px)" );
		} else {
			$coverContainer.css( "opacity", 0 );
			$coverContainer.css( "filter", "blur(10px)" );
		}
	}

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
