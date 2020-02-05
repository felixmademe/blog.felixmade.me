<main class="main">
    @include( 'partials.layouts.sidebar' )
    <section class="content">
        @include( 'partials.layouts.hero' )
        <div class="container">
            @yield( 'content' )
        </div>
        @include( 'partials.layouts.footer' )
    </section>
    @include( 'partials.layouts.mobile.navigation' )
</main>


