new WOW().init();
jQuery(document).ready(function($) {
	function parallax(){
	    var scrolled = $(window).scrollTop();
	    $('.bg').css('top', -(scrolled * 0.2) + 'px');
	}
	$(window).scroll(function(e){
    parallax();
	});

	//shortcut to run all the material commands from https://github.com/FezVrasta/bootstrap-material-design
	$.material.init();

	$('.other-staff').hide();
	$( ".home-hero" ).fadeIn( "slow", function() {
    	// Animation complete.
  	});
  	// $('.pavlo').hide();
  	// $('.pavlo').animate({width:'toggle'},1350);
  	setTimeout(function(){
	  		$("span.type").typed({
	            strings: ["a Procurement Expert or Supply Chain Manager?", "willing to develop yourself to as a world-class Procurement specialist or maybe to become the manager of Purchasing Department in your company? ^500 <br> Hello and Welcome! ^200 <br><br> My name is Robert Freeman. And I am Procurement expert. <br> ^100 <br>I have prepared a range of free materials that will help you improve your skills and have the fresh look at your Purchasing organization. [showOtherStaff]"  ],
	            typeSpeed: 0,
	            showOtherStaff: function() {
	            	$('.other-staff').slideDown('slow');

	            	// makeGoodHeight();
	            },
	        });
    	}, 1000);
  	$(".testimonials2").owlCarousel({
  		items: 4,
  		autoPlay: true,
  		stopOnHover: true,
  		navigation: true,
  		navigationText: ['<i class="material-icons">&#xE314;</i>', '<i class="material-icons">&#xE315;</i>']
  	});

	// function makeGoodHeight() {
	// 	setTimeout(function(){
	// 		var other = getComputedStyle(document.querySelector('.other-staff')).height;
 //        	var home = getComputedStyle(document.querySelector('#main-offer')).height;
 //         	var newHeight = parseFloat(home) - parseFloat(other);
 //           	document.querySelector('#main-offer').style.height = newHeight +'px';
	// 		document.querySelector('#main-offer').style.minHeight = newHeight +'px';
	// 		document.querySelector('#main-offer').style.marginBottom ='0px';
	// 	},600)

	// }

// $('#fullpage').fullpage();

});
