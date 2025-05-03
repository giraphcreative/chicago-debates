
const contactLists = document.querySelectorAll( '.people-container' );

[...contactLists].forEach( (contactList) => {
    var contactEntries = contactList.querySelectorAll( '.people-listing .person-entry' );

    if ( contactEntries != null ) {
        localStorage.setItem( 'contactListingName', document.title.replace( ' | Chicago Debates', '' ) );
        localStorage.setItem( 'contactListingURL', window.location.href );
    }
})


addEventListener("load", (event) => {
    
    // if we're on a single bio page
    if ( document.body.classList.contains( 'single-people' ) ) {

        // get stored contact listing values
        let contactListingName = localStorage.getItem( 'contactListingName' );
        let contactListingURL = localStorage.getItem( 'contactListingURL' );

        // adjust the breadcrumb with correct 'back' value
        document.querySelector( '.return-link' ).innerHTML = '<a href="'+contactListingURL+'">&laquo; Back to '+contactListingName+'</a>';

    }
   
});
