(function($){

  "use strict";

  var $win = $(window),
      $cover = $("#cover"),
      $coverHeadline = $("#cover-headline"),
      $innerWrapper = $("#inner-wrapper");

  function fitui(){
    $cover.height($win.height());
    $coverHeadline.css("line-height", $win.height()+"px");
    $innerWrapper.css("margin-top", $win.height()+"px");
  }

  function scrollBlur(){

    var translateY = 1 - ($cover.height() / 2) * ( $win.scrollTop() / $cover.height() );
    var blur = 10 * ( $win.scrollTop() / $cover.height() );

    if($win.scrollTop() === 0 ) {
      $coverHeadline.css( "opacity", 1 );
      $coverHeadline.css( "filter", "blur(0px)" );
      $coverHeadline.css( "transform", "translateY(0px)" );
    } else if($win.scrollTop() <= $cover.height() ) {
      $coverHeadline.css( "opacity", 0.9 - ( $win.scrollTop() / $cover.height() ) );
      $coverHeadline.css( "filter", "blur("+ blur +"px)" );
      $coverHeadline.css( "transform", "translateY("+ translateY +"px)" );
    } else {
      $coverHeadline.css( "opacity", 0 );
      $coverHeadline.css( "filter", "blur(10px)" );
    }
  }
  
  $(document).ready(function(){
    fitui();
  });

  $win.resize(function(){
    fitui();
  });

  $win.scroll(function(){
    scrollBlur();
  });

})(jQuery);