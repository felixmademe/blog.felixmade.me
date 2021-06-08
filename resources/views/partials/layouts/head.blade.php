<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">

{{-- SEO --}}
<title>{{ config( 'app.name' ) }} - @yield( 'title', 'En blogg om inget' )</title>
<meta name="title" content="Wetell blogg - En blogg om inget">
<meta name="description" content="Hej, jag heter Felix Wetell!Det är jag som har skapat, uppdaterar och underhåller den här bloggen.">
<meta name="keywords" content="blogg, wetell, personal, development, coding, inlägg">
<meta name="robots" content="index, follow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="language" content="Swedish">
<meta name="revisit-after" content="30 days">
<meta name="author" content="Felix Wetell">

{{-- Favicon --}}
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset( 'img/favicon/apple-touch-icon.png' ) }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset( 'img/favicon/favicon-32x32.png' ) }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset( 'img/favicon/favicon-16x16.png' ) }}">
<link rel="manifest" href="{{ asset( 'site.webmanifest' ) }}">
<link rel="mask-icon" href="{{ asset( 'img/favicon/safari-pinned-tab.svg' ) }}" color="#1a1a1a">
<meta name="msapplication-TileColor" content="#1a1a1a">
<meta name="theme-color" content="#1a1a1a">

{{-- CSS --}}
@if( config( 'app.env' ) == 'production' )
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
@else
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endif

{{-- JavaScript --}}
@if( config( 'app.env' ) == 'production' )
    <script src="{{ mix('js/app.js') }}" defer></script>
@else
    <script src="{{ asset('js/app.js') }}" defer></script>
@endif

<script defer src="https://www.googletagmanager.com/gtag/js?id=UA-135535698-6"></script>
<script src='https://www.google.com/recaptcha/api.js?render={{ config( 'google.recaptcha.site' ) }}&render=explicit'></script>
<script defer>
    grecaptcha.ready(function() {
        grecaptcha.execute( '{{ config( 'google.recaptcha.site' ) }}', { action: 'subscribeForm' } ).then( function( token )
        {
            if( token && document.getElementById( 'recaptcha' ) )
            {
                document.getElementById( 'recaptcha' ).value = token;
            }
        });
    });
    grecaptcha.ready(function() {
        grecaptcha.execute( '{{ config( 'google.recaptcha.site' ) }}', { action: 'unsubscribeForm' } ).then( function( token )
        {
            if( token && document.getElementById( 'recaptcha' ) )
            {
                document.getElementById( 'recaptcha' ).value = token;
            }
        });
    });
</script>
<script defer src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
