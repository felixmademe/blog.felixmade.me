@section( 'title', 'En blogg om inget' )
@section( 'heroTitle', 'Välkonmen till ' . env( 'APP_NAME' ) )
@section( 'heroSubtitle', 'Ta en titt' )
@extends( 'layouts.app' )

@section( 'content' )
    <div class="feed">
        @foreach( $posts as $post )
            @include( 'partials.posts.post', [ 'post' => $post, 'admin' => false ] )
        @endforeach
        <hr>
        <p>
            Hittade du något intressant?
            <br>
            Jag har skrivit en hel del mer än det du ser nu. Ta gärna en titt.
        </p>
        <a class="button is-primary" href="{{ route('posts.index') }}">
            Kolla in fler inlägg
        </a>
    </div>
@endsection
