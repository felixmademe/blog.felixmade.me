let navButton = document.getElementById( 'navigation-menu' );
let nav = document.getElementsByClassName( 'navigation' )[0];
let menu = document.getElementById( 'menu' );
let prevScrollpos = window.pageYOffset;

navButton.addEventListener( 'click', function( e ) {
    menu.classList.toggle( 'active' );
    bodyScroll();
} );

if( !menu.classList.contains( 'active' ) ) {
    window.onscroll = function() {
        let currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
            nav.style.bottom = "0";
        } else {
            nav.style.bottom = "-150px";
        }
        prevScrollpos = currentScrollPos;
    }
}


function bodyScroll() {
    if( menu.classList.contains( 'active' ) ) {
        document.body.style.overflow = 'hidden';
    } else {
        document.body.style.overflow = '';
    }
}
