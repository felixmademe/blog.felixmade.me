@section( 'title', 'En blogg om inget' )
@section( 'heroTitle', 'Välkonmen till ' . config( 'app.name' ) )
@section( 'heroSubtitle', 'Ta en titt' )
@extends( 'layouts.app' )

@section( 'content' )
    <div>
        <h3 class="subscribe-title title small">Synd att du drar...</h3>
        <p>
            Synd att du inte vill få uppdateringar om nya inlägg längre. Du kan när som helst bara prenumerera igen.
            <br>
            Fyll i den e-post nedan och klicka på skicka för att avprenumerera.
        </p>
        <form id="unsubscribeForm">
            @csrf
            <input type="hidden" id="recaptcha" name="recaptcha" value="{{ config( 'google.recaptcha.site' ) }}">
            <label class="label hidden" for="email" type="hidden">E-post</label>
            <input type="email" class="input" id="email" name="email" value="{{ old( 'email' ) }}" placeholder="E-postadress" autocomplete required>
            <small>
                Denna webbplats är skyddad av reCAPTCHA och Googles
                <a class="link" href="https://policies.google.com/privacy"
                   rel="noreferrer" target="_blank">sekretesspolicy</a> och
                <a class="link" href="https://policies.google.com/terms"
                   rel="noreferrer" target="_blank">användarvillkor</a> gäller.
            </small>
            <div class="group">
                <button type="submit" class="button is-secondary post-button">Skicka</button>
            </div>
            <div class="subscribe-response" id="alert">
                <p class="text">
                </p>
            </div>
        </form>
    </div>
@endsection


