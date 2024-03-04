@section( 'title', $post->title )
@section( 'heroTitle', $post->title )
@section( 'heroSubtitle', 'av ' . $post->user->name )
@extends( 'layouts.app' )

@section( 'content' )

    <div class="post">
        @include( 'partials.posts.text', [ 'post' => $post ] )
    </div>
    <h4 class="subtitle medium">Kolla in andra inlägg:</h4>
    @include( 'partials.posts.post', [ 'post' => $random, 'admin' => false ] )
@endsection
