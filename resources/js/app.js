window.$ = require( 'jquery' );

$(document).ready(function() {
    require('tinymce');
    require('./components/analytics');
    require('./components/cookieconsent');
    require('./components/editor');
    require('./components/sw');
    require('./components/subscription');
    require('./mobile/navigation');

    console.log('Hello :)');
});
