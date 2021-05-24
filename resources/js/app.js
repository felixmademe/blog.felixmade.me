window.$ = require( 'jquery' );

$(document).ready(function() {
    require('tinymce');
    require('./analytics');
    require('./cookieconsent');
    require('./editor');
    require('./mobile/navigation');
    require('./components/sw');

    console.log('Hello :)');
});
