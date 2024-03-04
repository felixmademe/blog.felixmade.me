<main class="main">
    @include( 'partials.layouts.sidebar' )
    <section class="content">
        @include( 'partials.layouts.hero' )
        <div class="container">
            @yield( 'content' )
        </div>
        @if(Request::segment( 1 ) != 'avprenumerera')
            @include( 'partials.layouts.subscribe' )
        @endif
        @include( 'partials.layouts.footer' )
    </section>
    @include( 'partials.layouts.mobile.navigation' )
</main>


