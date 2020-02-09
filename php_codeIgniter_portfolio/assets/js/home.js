
(function($) {
	"use strict";
	var nav = $('nav');
	var navHeight = nav.outerHeight();

	// Cacher et montrer le boutton scroll-to-top
	$(document).scroll(function() {
		var scrollDistance = $(this).scrollTop();
		if (scrollDistance > 100) {
			$('.scroll-to-top').fadeIn();
		} else {
			$('.scroll-to-top').fadeOut();
		}
	});


	$(window).trigger('scroll');
	$(window).on('scroll', function () {
		var pixels = 50;
		var top = 1200;
		if ($(window).scrollTop() > pixels) {
			$('.navbar-expand-md').addClass('navbar-reduce');
			$('.navbar-expand-md').removeClass('navbar-trans');
		} else {
			$('.navbar-expand-md').addClass('navbar-trans');
			$('.navbar-expand-md').removeClass('navbar-reduce');
		}

	});

	if ($('.text-slider').length == 1) {
		var typed_strings = $('.text-slider-items').text();
		var typed = new Typed('.text-slider', {
			strings: typed_strings.split(','),
			typeSpeed: 80,
			loop: true,
			backDelay: 1100,
			backSpeed: 30
		});
	}
	$('body').scrollspy({
		target: '#mainNav',
		offset: navHeight
	});


/* Défilement fluide de la page vers ancres */

	$('a[href*="#"]').not('[href="#"]').click(function(event) {
			if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')&&location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				if (target.length) {
					event.preventDefault();
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000, function() { //easeInOutExpo
						var $target = $(target);
						$target.focus();
						if ($target.is(":focus")) {
							return false;
						} else {
							$target.attr('tabindex','-1');
							$target.focus();
						};
					});
				}
			}
		});


})(jQuery);
