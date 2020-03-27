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
        <h4 class="subtitle small">Folding @ Home statistik</h4>
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
