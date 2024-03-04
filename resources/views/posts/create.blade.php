@section( 'title', 'Skapa inlägg' )
@section( 'heroTitle', 'Skapa inlägg' )
@section( 'heroSubtitle', 'Vad tänker du på?' )
@extends( 'layouts.app' )

@section( 'content' )

    <form action="{{ route( 'posts.store' ) }}" method="post">
        @csrf
        <div class="group">
            <label class="label" for="title">Titel</label>
            <input id="title" name="title" class="input" type="text" value="{{ old( 'title' ) }}" required autofocus />
            @error( 'title' )
                <span class="text error" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="group">
            <label class="label" for="text">Text</label>
            <textarea id="text" name="text" class="textarea" rows="3">{!! old( 'text' ) !!}</textarea>
            @error( 'text' )
                <span class="text error" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="group">
            <label class="label" for="state">Status
                <select class="select" name="state" required>
                    <option value="public" {{ old( 'state' ) === 'public' ? 'selected' : '' }}>Publik</option>
                    <option value="private" {{ old( 'state' ) === 'private' ? 'selected' : '' }}>Privat</option>
                    <option value="draft" {{ old( 'state' ) === 'draft' ? 'selected' : '' }}>Utkast</option>
                </select>
            </label>
            @error( 'text' )
                <span class="text error" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="group">
            <a class="button" href="{{ route( 'user.profile' ) }}">Avbryt</a>
            <button type="submit" class="button is-secondary post-button">Skapa</button>
        </div>
    </form>

@endsection
