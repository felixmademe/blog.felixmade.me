<div class="hero">
    <h1 class="title big">@yield( 'heroTitle', 'En titel' )</h1>
    @if( trim( $__env->yieldContent( 'heroSubtitle' ) ) )
        <h2>@yield( 'heroSubtitle' )</h2>
    @endisset
</div>
