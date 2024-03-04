<small class="post-date">Publicerad {{ $post->created_at }} av <a class="link" href="{{ route( 'about.me' ) }}">{{ $post->user->name }}</a></small>
<hr>
<div class="post-text">
    {!! $post->text !!}
</div>

@auth
    <hr>
    <a class="button is-secondary post-button" href="{{ route( 'posts.edit', $post->id ) }}">Redigera inlägg</a>
    <a class="button is-secondary post-button" href="{{ route( 'posts.show', $post->id ) }}">Visa statistik</a>
    <a class="button is-secondary post-button" href="{{ route( 'posts.display', $post->slug ) }}">Visa post</a>
@endauth

<hr class="separator">
