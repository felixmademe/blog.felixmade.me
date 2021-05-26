@section('title', $post->title )
@section('name', $post->name )
@extends( 'layouts.mail' )

@section( 'content' )
    <div class="text">
        {!! strip_tags( strlen( $post->text ) > 50 ? substr( $post->text, 0, 150 ) . '...' : $post->text ) !!}
        <br>
        <br>
        <small>Vill du läsa resten? Följ länken nedan för att läsa hela inlägget.</small>
        <br>
    <a class="button" href="{{ route( 'posts.display', $post->slug ) }}">Läs mer</a>
    <br>
    <small>
        Vill inte inte längre ha dessa mail?
        <br>
        <a href="{{ route('unsubscribe') }}">Avprenumerera här</a>
    </small>
    </div>

@endsection
