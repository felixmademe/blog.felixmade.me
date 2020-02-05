let nav = document.getElementById( 'navigation-menu' );
let menu = document.getElementById( 'menu' );

nav.addEventListener( 'click', function( e ) {
    menu.classList.toggle( 'active' );
} );
