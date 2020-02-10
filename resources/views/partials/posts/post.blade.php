<div class="post">
    <h3 class="title small post-title">{{ $post->title }}</h3>
    <small class="post-date">Publicerad {{ $post->published_at }} av <a class="link" href="{{ route( 'about.me' ) }}">{{ $post->user->name }}</a></small>
    <hr>
    <p class="post-text">
        {{ strip_tags( strlen( $post->text ) > 50 ? substr( $post->text, 0, 250 ) . '...' : $post->text ) }}
    </p>
    @if( $admin !== true )
        <a class="button is-secondary post-button" href="{{ route( 'posts.display', $post->slug ) }}">Läs mer</a>
    @else
        @auth
            <table class="text">
                <tbody>
                <tr>
                    <td>Status:</td>
                    <td>{{ strtoupper( $post->state ) }}</td>
                </tr>
                <tr>
                    <td>Visningar:</td>
                    <td class="highlight">{{ $post->views }}</td>
                </tr>
                <tr>
                    <td>Delningar:</td>
                    <td class="highlight">{{ $post->shares }}</td>
                </tr>
                </tbody>
            </table>
            <hr>
        <div class="group">
            <a class="button is-secondary post-button" href="{{ route( 'posts.edit', $post->id ) }}">Redigera inlägg</a>
            <a class="button is-secondary post-button" href="{{ route( 'posts.show', $post->id ) }}">Visa statistik</a>
            <a class="button is-secondary post-button" href="{{ route( 'posts.display', $post->slug ) }}">Visa inlägg</a>
        </div>
        @endauth
    @endif
</div>
