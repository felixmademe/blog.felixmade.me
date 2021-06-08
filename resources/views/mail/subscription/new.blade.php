@section('title', config('app.name') )
@section('name', 'Felix Wetell' )
@extends( 'layouts.mail' )
@section( 'content' )
    <div class="text">
        Välkommen till klubben!
        <br>
        När jag uppdaterar bloggen kommer du vara en av de som får en uppdatering direkt, fränt va?
        Du kan när som helst avprenumerera genom att följa länken nedan.
        <br>
        <small>
            Vill inte inte längre ha dessa mail?
            <br>
            <a href="{{ route('unsubscribe') }}">Avprenumerera här</a>
        </small>
    </div>

@endsection
