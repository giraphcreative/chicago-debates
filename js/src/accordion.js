

// tab controls
jQuery(document).ready(function($){

    $( '.accordion .accordion-handle' ).click(function(){
        $( this ).parent( '.accordion' ).toggleClass( 'open' );
    });

});

