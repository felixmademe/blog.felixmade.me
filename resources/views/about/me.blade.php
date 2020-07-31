@section( 'title', 'Om bloggen' )
@section( 'heroTitle', 'Om mig' )
@section( 'heroSubtitle', 'Jag som styr bloggen' )
@extends( 'layouts.app' )

@section( 'content' )

    <div class="text">
        <h3 class="title medium">Vem är jag?</h3>
        <h4 class="subtitle small">Introduktion</h4>
        <p>
            Hej, jag heter <a target="_blank" class="link" href="https://felixmade.me/">Felix Wetell</a>!
        </p>
        <p>
            Det är jag som har skapat, uppdaterar och underhåller den här bloggen.
        </p>
        <h4 class="subtitle small">Företag</h4>
        <p>
            Jag driver en enksild verksamhet som heter som jag, <a target="_blank" class="link" href="https://felixmade.me">Felix Wetell</a>. Jag brukar referera företaget
            efter det namn jag har min webbsida på, <a target="_blank" class="link" href="https://felixmade.me">felix made me</a>. Företaget startades 2019 med syfte
            att lära mig hur man driver ett företag samt samla på mig arbetserfarenhet.
        </p>
        <h4 class="subtitle small">Privat</h4>
        <p>
            På fritiden spenderar jag min tid att koda, dricka bira med polarna, spela och skruva på bilen. Jag har  en stor passion för
            webbutveckling och motorsporter. Den motorsport jag är mest intresserad av, och själv utför är roadracing, racing med motorcykel
            på asfalterade banor.
        </p>
        
        <h4 class="subtitle small">GitHub  - <a class="link" target="_blank" rel="noopener noreferrer" href="https://github.com/felixwetell">feixwetell</a></h4>
        <p>
            Som många av mina nära och kära vet, så älskar jag att koda och bygga webbsidor. Jag bygger webbsidor åtmig själv, kompisar, organisationer, förenignar och 
            företag. Finns det en webbsida att bygga hjälper jag gärna till, från design, kodning och uppladdning. Servern som allt kör på är en droplet från 
            <a href="https://digitalocean.com" rel="noopener noreferrer" class="link" target="_blank">Digital Ocean</a> och hanterar servern med ett verktyg som heter 
            <a href="https://plesk.com" rel="noopener noreferrer" class="link" target="_blank">Plesk</a>. Med dessa vektyg skriver jag kod, skapar commit som sedan laddas upp på servern och kan sedan ses direkt. 
        </p>
        <p>
            <a class="link" target="_blank" rel="noopener noreferrer" href="https://camo.githubusercontent.com/4d590d362c3057ec8ec5f59e37059a0a70a29810/68747470733a2f2f6769746875622d726561646d652d73746174732e76657263656c2e6170702f6170693f757365726e616d653d66656c6978776574656c6c2673686f775f69636f6e733d74727565">
                <img src="https://camo.githubusercontent.com/4d590d362c3057ec8ec5f59e37059a0a70a29810/68747470733a2f2f6769746875622d726561646d652d73746174732e76657263656c2e6170702f6170693f757365726e616d653d66656c6978776574656c6c2673686f775f69636f6e733d74727565" 
                alt="felixwetell's stats" data-canonical-src="https://github-readme-stats.vercel.app/api?username=felixwetell&amp;show_icons=true" style="max-width:100%;">
            </a>
        </p>
        <h4 class="subtitle small">Folding @ Home - <a class="link" target="_blank" rel="noopener noreferrer" href="https://stats.foldingathome.org/donor/felixwetell">feixwetell</a></h4>
        <p>
            När jag inte använder min speldator jag har hemma så bidrar jag emd datorkraft till forskningsprojektet
            <a target="_blank" class="link" href="https://foldingathome.org/">Folding @ Home (FAH)</a>.
            Har du extra datorkraft hemma som inte används, hjälp gärna till och bidra till forskning, för en bättre framtid tillsammans.
        </p>
        <table>
            <tbody>
                <tr>
                    <th>Namn:</th>
                    <td><a target="_blank" class="link" href="https://stats.foldingathome.org/donor/felixwetell">felixwetell</a></td>
                </tr>
                <tr>
                    <th>Poäng:</th>
                    <td>{{ $user->fah_score }}</td>
                </tr>
                <tr>
                    <th>Rank:</th>
                    <td>{{ $user->fah_rank }} av {{ $user->fah_total_users }}</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
