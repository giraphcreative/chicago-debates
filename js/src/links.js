

jQuery(document).ready(function($) {
	$( '.content a:not(.previous):not(.next):not(.lightbox-iframe)' ).click(function( event ){
		
		// break the normal linking behavior
		event.preventDefault();

		// get the link
		var the_link = $( this );
		var the_link_href = the_link.attr( 'href' );

		if ( $('body').hasClass( 'page-id-1460' ) ) {
			window.open( the_link_href, "_blank" ); 
		}

		// prompt the user and if they confirm the prompt, proceed to the third party site.
		if ( the_link.hasClass( 'bypass' ) ||
			the_link_href.match( /chicago.jpederson.io/i ) || 
			the_link_href.match( /chicagodebates.org/i ) ||
			the_link_href.charAt(0) === '#' || 
			the_link_href.charAt(0) === '/' ) {
			
			// go to the url in question if it's in the exceptions
			location.href = the_link_href;
		} else {
            window.open( the_link_href, "_blank" ); 
		}
	});
});

