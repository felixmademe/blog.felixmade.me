@section( 'title', 'Admin: ' . $post->title )
@section( 'heroTitle', 'Admin: ' . $post->title )
@section( 'heroSubtitle', 'av ' . $post->user->name )
@extends( 'layouts.app' )

@section( 'content' )

    <div class="post">
        @include( 'partials.posts.text', [ 'post' => $post, 'admin' => true ] )
    </div>
    @auth
        <h4 class="subtitle medium">Statistik:</h4>
        <table class="text">
            <tbody>
            <tr>
                <td>Visningar</td>
                <td>:</td>
                <td>{{ $post->views }}</td>
            </tr>
            <tr>
                <td>Delningar</td>
                <td>:</td>
                <td>{{ $post->shares }}</td>
            </tr>
            <tr>
                <td>Skapad</td>
                <td>:</td>
                <td>{{ $post->created_at }}</td>
            </tr>
            <tr>
                <td>Publicerad</td>
                <td>:</td>
                <td>{{ $post->published_at }}</td>
            </tr>
            </tbody>
        </table>
    @endauth

@endsection
