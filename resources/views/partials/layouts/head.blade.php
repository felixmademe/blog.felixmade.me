<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">

{{-- SEO --}}
<title>{{ env( 'APP_NAME' ) }} - @yield( 'title', 'En blogg om inget' )</title>
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
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
<link href="{{ asset( 'css/app.css' ) }}" rel="stylesheet">

{{-- JavaScript --}}
<script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script defer src="https://www.googletagmanager.com/gtag/js?id=UA-135535698-6"></script>
<script defer src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
<script defer src="{{ asset( 'js/app.js' ) }}" type="text/javascript"></script>
