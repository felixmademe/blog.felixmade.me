<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">

{{-- SEO --}}
<title>{{ env( 'APP_NAME' ) }} - @yield( 'title', 'En blogg om inget' )</title>

{{-- CSS --}}
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
<link href="{{ asset( 'css/app.css' ) }}" rel="stylesheet">

{{-- JavaScript --}}
<script defer src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script defer src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script defer src="{{ asset( 'js/app.js' ) }}" type="text/javascript"></script>
