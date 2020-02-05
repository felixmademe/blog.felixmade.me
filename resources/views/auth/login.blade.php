@section( 'title', 'Inloggning' )
@section( 'heroTitle', 'Inloggning för admin' )
@section( 'heroSubtitle', 'Får du vara här?' )
@extends( 'layouts.app' )
@section( 'content' )
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h3 class="title medium">Inloggning</h3>
        <hr>
        <div class="group">
            <label class="label" for="email">E-post</label>
            <input type="email" class="input" id="email" name="email" value="{{ old( 'email' ) }}" autofocus required>
            @error( 'email' )
                <span class="text error" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="group">
            <label class="label" for="password">Lösenord</label>
            <input type="password" class="input" id="password" name="password" required>
            @error( 'password' )
                <span class="text error" role="alert">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="group">
            <button type="submit" class="button is-secondary post-button">Logga in</button>
        </div>
    </form>
@endsection
