
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

/*
	document.addEventListener("DOMContentLoaded", function() {
		var lazyloadImages = document.querySelectorAll("img.lazy");
		var lazyloadThrottleTimeout;

		function lazyload () {
			if(lazyloadThrottleTimeout) {
				clearTimeout(lazyloadThrottleTimeout);
			}

			lazyloadThrottleTimeout = setTimeout(function() {
				var scrollTop = window.pageYOffset;
				lazyloadImages.forEach(function(img) {
					if(img.offsetTop < (window.innerHeight + scrollTop)) {



						img.src = img.dataset.src;
						img.classList.remove('lazy');
					}
				});
				if(lazyloadImages.length == 0) {
					document.removeEventListener("scroll", lazyload);
					window.removeEventListener("resize", lazyload);
					window.removeEventListener("orientationChange", lazyload);
				}
			}, 20);
		}

		document.addEventListener("scroll", lazyload);
		window.addEventListener("resize", lazyload);
		window.addEventListener("orientationChange", lazyload);
	});
*/


})(jQuery);

