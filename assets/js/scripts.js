/*
*    Title: IN1010 Lab 06 Sample Solution (scripts.js)
*    Author: City University Of London
*    Date: 2021
*    Availability: https://moodle.city.ac.uk/mod/folder/view.php?id=1824172
*    Usage: backstretch for pages
*    Changes: very minor changes or no changes 
*/


function scroll_to(clicked_link, nav_height) {
	var element_class = clicked_link.attr('href').replace('#', '.');
	var scroll_to = 0;
	if(element_class != '.top-content') {
		element_class += '-container';
		scroll_to = $(element_class).offset().top - nav_height;
	}
	if($(window).scrollTop() != scroll_to) {
		$('html, body').stop().animate({scrollTop: scroll_to}, 1000);
	}
}


jQuery(document).ready(function() {
	
	/*
	    Navigation
	*/
	$('a.scroll-link').on('click', function(e) {
		e.preventDefault();
		scroll_to($(this), $('nav').outerHeight());
	});
	
    /*
        Background slideshow
    */
	$('.top-content').backstretch("assets/img/backgrounds/Countertop.jpg");
	$('.top-content-about').backstretch("assets/img/backgrounds/Houses.jpg");
    $('.section-4-container').backstretch("assets/img/backgrounds/key.jpg");
    
    /*
	    Wow
	*/
	new WOW().init();
	
});
