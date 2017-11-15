/*
===========================================================================
 EXCLUSIVE ON themeforest.net
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 Template Name   : Cyberweb - Responsive One Page Multipurpose Template
 Author          : bootWeb
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 Copyright (c) 2017 - bootWeb - https://themeforest.net/user/bootweb
===========================================================================
*/

/*================================================
            Table of contents  
==================================================
 
1. Scroll NavBar
2. Scroll up
3. Wow js
4. Smooth scroll
5. Knob js
6. Progress Bar
7. Team
8. Magnific Popup
9. Mixitup
10. Hoverdir
11. Counter
12. Testimonial
13. Contact form
14. Google Map
15. Clients
16. Preloader

====================================================
            End table content 
===================================================*/

$(function () {
	"use strict";

	var $window = $(window),
	$body = $('body');

	jQuery(document).ready(function($){

//Scroll NavBar
$window.on("scroll", function () {
	if ($window.scrollTop() > 160) {
		$('#nav').addClass("scroll");
	} else {
            //remove the background property
            $('#nav').removeClass("scroll");
        }
    });

//Scroll up
$('#scroll-up').hide();
$window.on("scroll", function () {
	if ($window.scrollTop() > 300) {
		$('#scroll-up').fadeIn();
	} else {
		$('#scroll-up').fadeOut();
	}
});
$('#scroll-up').on("click", function () {
	$("html, body").animate({
		scrollTop: 0
	}, 1000);
	return false;
});

//Wow js
new WOW().init(); 

//Smooth Scroll
$(".nav a,#about a,[href='#body']").on('click', function(event) {
	if (this.hash !== ""){
		event.preventDefault();
		var hash = this.hash;
		$('html, body').animate({
			scrollTop: $(hash).offset().top
		}, 900, function(){
			window.location.hash = hash;
		});
	}
});

//Knob js
if(typeof($.fn.knob) != 'undefined') {
	var knob_tex = $('.knob');
	knob_tex.each(function () {
		var $this = $(this),
		knobVal = $this.attr('data-rel');

		$this.knob({
			'draw' : function () { 
				$(this.i).val(this.cv + '%')
			}
		});

		$this.appear(function() {
			$({
				value: 0
			}).animate({
				value: knobVal
			}, {
				duration : 2000,
				easing   : 'swing',
				step     : function () {
					$this.val(Math.ceil(this.value)).trigger('change');
				}
			});
		}, {accX: 0, accY: -150});
	});
}

//Progress Bar
var startSkills = $('.single-skill');
startSkills.waypoint(function () {
	$(this).each(function () {
		var data = $(this).data('percent');
		$(this).find('.skill-bar-overlay').animate({
			width: data + "%"
		}, 1800);

		$(this).find('span').addClass('show').animate({
			width: data + (-20) + "%"
		}, 1800);
	});
}, {
	triggerOnce: true,
	offset: 'bottom-in-view'
});

//Team
$("#us").owlCarousel({
	navigation: false,
	pagination: true,
	slideSpeed: 800,
	paginationSpeed: 800,
	smartSpeed: 500,
	autoplay: false,
	singleItem: true,
	loop: false,
	responsive:{
		0:{
			items:1
		},
		580:{
			items:2
		},
		900:{
			items:3
		}
	}
});

//Magnific Popup
$('#parent').magnificPopup({
	delegate: 'a.gallery',
	type: 'image',
	closeOnContentClick: true,
	gallery: {enabled: true}
});

//Mixitup
$('#parent').mixItUp();

//Hoverdir
if ( jQuery().hoverdir ) {
	jQuery( '.da-thumbs li' ).each( function() {
		jQuery( this ).hoverdir();
	});
}

//Counter
$('.counter').counterUp({
	delay: 1,
	time: 250
});

//Testimonial
$("#owl-testimonial").owlCarousel({
    navigation: false,
    pagination: true,
    slideSpeed: 800,
    paginationSpeed: 800,
    smartSpeed: 500,
    autoplay: false,
    singleItem: true,
    loop: false,
    responsive:{
        0:{
          items:1
        },
        680:{
          items:2
        },
        1000:{
          items:3
        }
    }
});

//Contact form
var validator=$("#form").validate({
	rules: {
		name: "required",
		email: {
			required: true,
			email: true
		},
		subject: "required",
		comment: "required",
	},

	messages: {
		name: "Please enter your name",
		email: "Please enter a valid email address",
		subject: "Please enter a subject",
		comment: "Please enter your message"
	}
});

$(".send-btn").click(function(){
	$("#form").css("color", "#ac4b49");
});

//Google Map
var myCenter = new google.maps.LatLng(19.076,72.880);
function initialize() {
	var mapProp = {
		center:myCenter,
		zoom:14,
		scrollwheel:false,
		draggable:true,
		mapTypeId:google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("map"),mapProp);
	var marker = new google.maps.Marker({
		position:myCenter,
		icon: '/cyberweb/images/map.png',
	});
	marker.setMap(map);
	marker.setAnimation(google.maps.Animation.BOUNCE);
}
google.maps.event.addDomListener(window, 'load', initialize);

//Clients
$("#partners").owlCarousel({
	loop: true,
	nav: false,
	dots: false,
	margin: 30,
	autoplay: true,
	autoplayTimeout: 1400,
	smartSpeed: 500,
	animateOut: 'slideOutDown',
	animateIn: 'slideInDown',
	responsive: {
		0:{
			items:1
		},
		320:{
			items:2
		},
		420:{
			items:3
		},
		860:{
			items:5
		},
		1000:{
			items:6
		}
	}
});

//Preloader
$window.load(function(){
	$('.spinner').fadeOut(); 
	$('.preloader').delay(350).fadeOut(500);
	$body.delay(350).css({'overflow':'visible'});  
});

}(jQuery));

});