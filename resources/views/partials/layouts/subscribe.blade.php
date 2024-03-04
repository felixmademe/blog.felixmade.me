<div class="subscribe">
    <hr class="separator">
    <h3 class="subscribe-title title small">Om du vill läsa mina tankar...</h3>
    <p>Bli en del av coola gänget då, du får en uppdatering varje gång jag gör ett nytt inlägg.</p>
    <form id="subscribeForm">
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
