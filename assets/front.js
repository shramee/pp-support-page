jQuery( function( $ ) {
	var
		hr = new Date().getHours(),
		$body = $( 'body' ),
		$hero = $( '#hero' ),
		$nightSky = $( '.sky' );

	if ( location.hash ) {
		hr = location.hash.replace( '#', '')
	}

	$body.addClass( 'time-' + hr );
	if ( hr < 5 ) {
		$body.addClass( 'time-night time-dark' );
	} else if ( hr < 11 ) {
		$body.addClass( 'time-morning time-bright' );
	} else if ( hr < 17 ) {
		$body.addClass( 'time-day time-bright' );
	} else if ( hr < 20 ) {
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