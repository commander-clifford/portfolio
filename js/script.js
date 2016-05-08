(function($){

  "use strict";

  var $win = $(window),
      $cover = $("#cover"),
      $coverHeadline = $("#cover-headline"),
      $innerWrapper = $("#inner-wrapper");

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
    $coverHeadline.css("line-height", $win.height()+"px");
    $innerWrapper.css("margin-top", $win.height()+"px");
    $innerWrapper.css("min-height", $win.height()+"px"); // TODO: Remove once content fills screen
  }

  function scrollBlur(){
    var scrollPos = $win.scrollTop(),
        coverHeight = $cover.height();
    if(scrollPos === 0 ) {
      $coverHeadline.css( "opacity", 1 );
      $coverHeadline.css( "filter", "blur(0px)" );
      $coverHeadline.css( "transform", "translateY(0px)" );
    } else if(scrollPos <= coverHeight ) {
      $coverHeadline.css( "opacity", (0.9 - ( scrollPos / coverHeight )) );
      $coverHeadline.css( "filter", "blur("+ (10 * ( scrollPos / coverHeight )) +"px)" );
      $coverHeadline.css( "transform", "translateY("+ (1 - (coverHeight / 2) * ( scrollPos / coverHeight )) +"px)" );
    } else {
      $coverHeadline.css( "opacity", 0 );
      $coverHeadline.css( "filter", "blur(10px)" );
    }
  }
  
})(jQuery);