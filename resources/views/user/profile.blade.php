@section( 'title', 'Profil' )
@section( 'heroTitle', 'Profil' )
@section( 'heroSubtitle', Auth::user()->email )
@extends( 'layouts.app' )

@section( 'content' )

    <h3 class="subtitle small">Skapa ett nytt inlägg</h3>
    <a class="button is-primary" href="{{ route( 'posts.create' ) }}">Nytt inlägg</a>
    <hr>

    @if( $post )
        <h3 class="subtitle medium">Senaste inlägget:</h3>
        @include( 'partials.posts.post', [ 'post' => $post, 'admin' => true ] )
    @else
        Inget inlägg tillgängligt.
    @endif
    @if( !$drafts->isEmpty() )
        <hr class="separator">
        <h3 class="subtitle medium">Utkast</h3>
        @foreach( $drafts as $draft )
            @include( 'partials.posts.post', [ 'post' => $draft, 'admin' => true ] )
        @endforeach
    @endif

    @if( !$private->isEmpty() )
        <hr class="separator">
        <h3 class="subtitle medium">Privata inlägg</h3>

        @foreach( $private as $post )
            @include( 'partials.posts.post', [ 'post' => $post, 'admin' => true ] )
        @endforeach

    @endif

@endsection
