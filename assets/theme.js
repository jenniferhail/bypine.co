// function scriptname(){
// 	jQuery(document).ready(function($){
// 		// script goes here
// 	});
// }

function scriptname(home_navbar){
 	jQuery(document).ready(function($){

 		$(document).scroll(function() {

 			var slideheight = ($( '.home-logo' ).height());
			var posTop = $(window).scrollTop() - $('.home-logo').offset().top;

			if (posTop > 80) {
				$('#site-header').animate({ 
					opacity: '0.95',
				}, { duration: 100, queue: false });
			} else {
				$('#site-header').animate({ 
					opacity: '0',
				}, { duration: 100, queue: false });
			}			

 		}

 	});
}