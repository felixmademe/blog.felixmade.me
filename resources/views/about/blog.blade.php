@section( 'title', 'Om bloggen' )
@section( 'heroTitle', 'Om ' . config( 'app.name' ) )
@section( 'heroSubtitle', 'En blogg om inget' )
@extends( 'layouts.app' )

@section( 'content' )

    <div class="text">
        <h3 class="title medium">Vad är {{ config( 'app.name' ) }}?</h3>
        <p>
            Jag ville skapa min blogg för att bygga någpt coolt. Så jag gjorde det.
        </p>
        <hr class="separator">
        <p>
            Bloggen är byggd med flera olika ramverk och tekniker som jag gillar att använda.
            <br>
            Dessa inkluderar:
        </p>
        <ul>
            <li>Laravel</li>
            <li>SCSS</li>
            <li>JavaScript / jQuery</li>
            <li>Lite magik</li>
            <li>Lite kreativitet</li>
        </ul>
        <p>
            Designen är baserad på Spotify's design system Encore, som den använder internt för att designa webbsidor, läs mer om det
            <a class="link" href="https://spotify.design/article/reimagining-design-systems-at-spotify" target="_blank">här</a>.
        </p>
    </div>

@endsection
