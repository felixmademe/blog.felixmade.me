<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <style>

        @font-face
        {
            src: url('https://fonts.googleapis.com/css?family=Bebas+Neue|Noto+Sans:400,400i,700,700i&display=swap');
        }
        p, a, h3, .text {
            color: black;
            font-family: 'Noto Sans', sans-serif !important;
        }
        a
        {
            color: #FF4D4D;
            text-decoration: none;
        }
        a:hover
        {
            color: #FF0101;
            text-decoration: underline;
        }
        .name
        {
            margin-bottom: 0;
        }
        h3
        {
            color: white;
            margin-bottom: 5px;
        }
        body
        {
            background-color: #1a1a1a !important;
            width: 70%;
            margin: 0 auto;
        }
        .hero
        {
            background: linear-gradient( 180deg, #FF4D4D 0%, #7158E2 100%);
            color: #fff;
            padding: 20px 3em;
            width: calc(100% - 6em);
        }
        .title, .subtitle {
            color: white;
            letter-spacing: 0.07em;
        }
        .title {
            font-family: 'Bebas Neue', Arial, sans-serif !important;
            font-size: 3em;
            margin-bottom: 0;
        }
        .subtitle {
            font-family: 'Noto Sans', Arial, sans-serif !important;
        }
        .main
        {
            margin-top: 0;
            width: 100%;
            background-color: #fff;
            color: #000;
        }
        .main .container {
            padding: 3em 3em;
        }
        .container {
            line-height: 1.5;
        }
        footer
        {
            padding: 20px 0;
            width: 100%;
            text-align: center;
        }
        button {
            border:none;
        }
        .button {
            display: inline-block;
            margin: 1em .5em 1em 0;
            padding: 1em 1.7em;
            box-shadow: 0 7px 20px 0 rgba(0, 0, 0, .14), 0 7px 20px 0 rgba(0, 0, 0, .10);
            transition: background-color .2s, color .2s;
            text-decoration: none;
            text-align: center;
            user-select: none;
            background-color: #7158E2;
            color: #fff;
            transition-duration: 0.2s;
        }
        .button:hover {
            background-color: #4123CA;
            color: #fff;
            text-decoration: none;
            transition-duration: 0.2s;
        }
        @media screen and (max-width: 768px)
        {
            body
            {
                width: 100%;
            }
            header h1 {
                font-size: 3em;
            }
        }
    </style>
    <title>{{ config('app.name') }}</title>
</head>
<body>
    <div class="main">
        <div class="hero">
            <h1 class="title">@yield('title', 'Titel')</h1>
            <h2 class="subtitle">av @yield('name', 'Namn')</h2>
        </div>
        <div class="container">
            @yield( 'content' )
        </div>
    </div>

    <footer>
        <h3>{{ config( 'app.name' ) }}</h3>
        <a href="{{ config( 'app.url' ) }}">{{ config( 'app.url' ) }}</a>
    </footer>
</body>
</html>
