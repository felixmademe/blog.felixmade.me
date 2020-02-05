@section( 'title', 'Hello' )
@section( 'heroTitle', 'Välkonmen till ' . env( 'APP_NAME' ) )
@section( 'heroSubtitle', 'Ta en titt' )
@extends( 'layouts.app' )

@section( 'content' )
    <div class="feed">
        @foreach( $posts as $post )
            @include( 'partials.posts.post', [ 'post' => $post, 'admin' => false ] )
        @endforeach
    </div>
@endsection
