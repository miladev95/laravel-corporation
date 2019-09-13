
/*jQuery anonymous function calls*/
(function($) {

/**
 * *************************************************************************************************
 * Documetn Ready
 * *************************************************************************************************
 */

$(function() {



/**
 * *************************************************************************************************
 * Home Page Carosel
 * *************************************************************************************************
 */

if( $('#qt_home_carosel').length ){

	$('#qt_home_carosel').carousel({
		interval: 4000
	});

	var click_event = false;

	$('#qt_home_carosel').on('click', '.qt-carosel-nav a', function() {

		click_event = true;

		$('.qt-carosel-nav li').removeClass('active');
		$(this).parent().addClass('active');

	}).on('slid.bs.carousel', function(e) {

		if(!click_event) {

			var count = $('.qt-carosel-nav').children().length -1;
			var current = $('.qt-carosel-nav li.active');
			current.removeClass('active').next().addClass('active');
			var id = parseInt(current.data('slide-to'));

			if(count == id) {
				$('.qt-carosel-nav li').first().addClass('active');
			}

		}

		click_event = false;

	});

}


/**
 * *************************************************************************************************
 * Home Page Carosel WIDE
 * *************************************************************************************************
 */

if( $('#qt_home_carosel_wide').length ){

	$('#qt_home_carosel_wide').carousel({
		interval: 4000
	});

}



/**
 * *************************************************************************************************
 * Magnific Popup Lightbox
 * *************************************************************************************************
 */

if( $('.qt-photo-gallery-single').length ){

	$('.qt-photo-gallery-single').magnificPopup({
	  delegate: 'a', // child items selector, by clicking on it popup will open
	  type: 'image',
	  gallery: {
	  	enabled:true
	  }
	  // other options
	});

}

/**
 * *************************************************************************************************
 * Contact Page Maps
 * *************************************************************************************************
 */


if( $('#qt_contact_google_map').length ){

	/*
	Note: you can find Latitude and Longitude for any address with the help of below website.
	http://www.latlong.net/
	 */

	// Our temporary location is: Stratford, London, UK
	// change values below with your business locaiton - Longitude & Latitude

	var location_latitude  = 51.543270;
	var location_longitude = -0.001870;


	// large map
	// ==========================

	var qt_contact_map = new GMaps({

		div: '#qt_contact_google_map',

		lat: location_latitude,
		lng: location_longitude,
		zoom: 14,

		scrollwheel: false,
		navigationControl: false,
		mapTypeControl: false,
		scaleControl: false,
		zoomControl: true,
		//draggable: false,
		disableDoubleClickZoom: true

	});

	qt_contact_map.addMarker({

	  lat: location_latitude,
		lng: location_longitude

	});



}


/**
 * *************************************************************************************************
 * *************************************************************************************************
 */


});

/**
 * *************************************************************************************************
 * End: Document Ready
 * *************************************************************************************************
 */

})(jQuery);
