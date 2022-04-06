/* 
 * Create HTML5 elements for IE's sake
 * Reference: http://ejohn.org/blog/html5-shiv/
 * Reference: http://remysharp.com/2009/01/07/html5-enabling-script/
 */

document.createElement("article");
document.createElement("footer");
document.createElement("header");
document.createElement("hgroup");
document.createElement("nav");
document.createElement("aside");
document.createElement("section");


$(document).ready(function() {
     $('#navbtn').click(function() {
          $('ul.nav-menu').animate({ height: 'toggle'}, 300);
		 
        
	});	  
	 
	
});
$(document).ready(function() { 
if ($(window).width() < 740) {
  $('ul.nav-menu').find('ul').parent().append('<span class="menuarrow"></span>');
  $(".menuarrow").click(function () {
		$(this).prev("ul").animate({ height: 'toggle'}, 300);
		//$(this).removeAttr("href");
		//return false;
		if ($(this).parent().hasClass('active')) {
      		$(this).parent().removeClass('active');
   		 } else {
      		$(this).parent().addClass('active');
    	} 
    });
}
});




$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "fade"
  });
});
