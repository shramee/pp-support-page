jQuery( function( $ ) {
	var
		hr = ppHour,
		$body = $( 'body' ),
		$hero = $( '#hero' ),
		$nightSky = $( '.sky' );

	if ( location.hash ) {
		hr = location.hash.replace( '#', '')
	}

	var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);

	if ( isMobile ) {
		$body.addClass( 'mobile-detected' );
	}


	$body.addClass( 'time-' + hr );
	if ( hr < 7 ) { // till 6:59a
		$body.addClass( 'time-night time-dark' );
	} else if ( hr < 10 ) { // till 9:59a
		$body.addClass( 'time-morning time-bright' );
	} else if ( hr < 16 ) { // till 3:59p
		$body.addClass( 'time-day time-bright' );
	} else if ( hr < 18 ) { // Til 5:59p
		$body.addClass( 'time-evening time-bright' );
	} else {
		$body.addClass( 'time-night time-dark' );
	}

	$nightSky.find( '.fa-star' ).each( function () {
		var $t = $( this );
		$t.css( {
			top: 25 + 160 * Math.random(),
			left: (100 * Math.random()) + 'vw',
			fontSize: (5 + 11 * Math.random()) + 'px'
		} );
	} );

	$body.find( '.scroll-down' ).click( function () {
		$("html, body").animate( {
			scrollTop: $hero.next( '.col-full' ).children('.content').offset().top,
		}, 700 );
	} );
} );