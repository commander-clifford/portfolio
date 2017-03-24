(function($){

	"use strict";

	var $win = $(window),
	$cover = $("#cover"),
	$coverContainer = $("#cover-container"),
	$coverHeadline = $("#cover-headline"),
	$innerWrapper = $("#inner-wrapper"),
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

	function fitui(){
		$cover.height($win.height());
		$coverContainer.css("top", "calc( 50% - " + $coverContainer.height()/2 + "px)");
		$innerWrapper.css("margin-top", $win.height()+"px");
	}

	function scrollBlur(){
		var scrollPos = $win.scrollTop();
		var coverHeight = $cover.height();
		if( scrollPos === 0 ){
			$homeAvatar.removeClass("active").addClass("deactivate");
			$coverContainer.css( "opacity", 1 );
			$coverContainer.css( "filter", "blur(0px)" );
			$coverContainer.css( "transform", "translateY(0px)" );
		} else if( scrollPos <= coverHeight ){
			$homeAvatar.removeClass("deactivate").addClass("active");
			$coverContainer.css( "opacity", (1 - ( scrollPos / coverHeight )) );
			$coverContainer.css( "filter", "blur("+ (10 * ( scrollPos / coverHeight )) +"px)" );
			$coverContainer.css( "transform", "translateY("+ (1 - (.75 * ((coverHeight / 2) * (scrollPos / coverHeight))) ) +"px)" );
		} else {
			$coverContainer.css( "opacity", 0 );
			$coverContainer.css( "filter", "blur(10px)" );
		}
	}

})(jQuery);
