@section( 'title', 'Alla inlägg' )
@section( 'heroTitle', 'Alla inlägg' )
@section( 'heroSubtitle', 'Antal inlägg: '. $total )
@extends( 'layouts.app' )

@section( 'content' )

    @foreach( $posts as $post )
        @include( 'partials.posts.post', [ 'post' => $post, 'admin' => false ] )
    @endforeach

    {{ $posts->links('partials.layouts.pagination') }}

@endsection
