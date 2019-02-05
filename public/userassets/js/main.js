(function ($) {
	"use strict";

	jQuery(document).ready(function ($) {

        // Magnific Popup starts
		$('.image-popup').magnificPopup({
			type: 'image',
			gallery: {
					enabled: true
				}
		})
		// Magnific Popup ends

		// Owl Carousel ends

		// Wow Js for Animation load
		new WOW().init();

		// One page nav


		$('#top').onePageNav({
			scrollSpeed: 600,
			scrollThreshold: 1
		});

		// SlickNav
		$('#menu').slicknav();

	});


	jQuery(window).load(function () {

		/* Sticky Header */
		$(window).on('scroll', function () {
			if ($(this).scrollTop() > 100) {
				$('.header-fixed').addClass("sticky");
			} else {
				$('.header-fixed').removeClass("sticky");
			}
		});
		
	});

	// Dropdown
	jQuery(document).ready(function (e) {
    function t(t) {
        e(t).bind("click", function (t) {
            t.preventDefault();
            e(this).parent().fadeOut()
        })
    }
    e(".dropdown-toggle").click(function () {
        var t = e(this).parents(".button-dropdown").children(".dropdown-menu").is(":hidden");
        e(".button-dropdown .dropdown-menu").hide();
        e(".button-dropdown .dropdown-toggle").removeClass("active");
        if (t) {
            e(this).parents(".button-dropdown").children(".dropdown-menu").toggle().parents(".button-dropdown").children(".dropdown-toggle").addClass("active")
        }
    });
    e(document).bind("click", function (t) {
        var n = e(t.target);
        if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-menu").hide();
    });
    e(document).bind("click", function (t) {
        var n = e(t.target);
        if (!n.parents().hasClass("button-dropdown")) e(".button-dropdown .dropdown-toggle").removeClass("active");
    })
});
}(jQuery));