@section( 'title', 'Redigera ' . $post->title )
@section( 'heroTitle', 'Redigera ' . $post->title )
@section( 'heroSubtitle', 'Fixa till eventuella fel.' )
@extends( 'layouts.app' )

@section( 'content' )

    <form action="{{ route( 'posts.update', $post->id ) }}" method="post">
        @csrf
        @method( 'patch' )
        <div class="group">
            <label class="label" for="title">Titel</label>
            <input id="title" name="title" class="input" type="text" value="{{ $post->title }}" required autofocus />
            @error( 'title' )
                <span class="text error" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="group">
            <label class="label" for="text">Text</label>
            <textarea id="text" name="text" class="textarea" rows="3" required>{{ $post->text }}</textarea>
            @error( 'text' )
                <span class="text error" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="group">
            <label class="label" for="state">Status
                <select class="select" name="state" required>
                    <option value="public" {{ $post->state === 'public' ? 'selected' : '' }}>Publik</option>
                    <option value="private" {{ $post->state === 'private' ? 'selected' : '' }}>Privat</option>
                    <option value="draft" {{ $post->state === 'draft' ? 'selected' : '' }}>Utkast</option>
                </select>
            </label>
            @error( 'text' )
                <span class="text error" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="group">
            <a class="button" href="{{ route( 'posts.show', $post->id ) }}">Avbryt</a>
            <button type="submit" class="button is-secondary post-button">Spara</button>
        </div>
    </form>
    <hr class="separator">
    <form onsubmit="return confirm('Vill du verkligen ta bort det här inlägget?');"
          action="{{ route( 'posts.destroy', $post->id ) }}" method="post">
        @csrf
        @method( 'delete' )
        <h3 class="sutitle medium">Ta bort inlägget?</h3>
        <p>Denna åtgärd är inte permanent.</p>
        <button type="submit" class="button is-primary no-margin">
            Ta bort
        </button>
    </form>

@endsection
