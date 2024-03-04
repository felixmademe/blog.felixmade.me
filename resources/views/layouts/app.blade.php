<!DOCTYPE html>
<html>
    <head lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        @include( 'partials.layouts.head' )
    </head>
    <body>
        @include( 'partials.layouts.body' )
    </body>
</html>
