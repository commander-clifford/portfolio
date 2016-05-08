function fitui(){

	var $win = $(window);

  var $cover = $("#cover");
  var $coverHeadline = $("#cover-headline");
  var $innerWrapper = $("#inner-wrapper");

  $cover.height($win.height());
  $coverHeadline.css("line-height", $win.height()+"px");
  $innerWrapper.css("margin-top", $win.height()+"px");



}



$(document).ready(function(){
  fitui();
});
$(window).resize(function(){
	fitui();
});



// ??
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - 80 // navbar height
        }, 1000);
        return false;
      }
    }
  });
});