@if ($paginator->hasPages())
    <div class="group">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <a class="button is-disabled">
                Föregående
            </a>
        @else
            <a class="button" href="{{ $paginator->previousPageUrl() }}" rel="prev">
                Föregående
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="button" href="{{ $paginator->nextPageUrl() }}" rel="next">
                Nästa
            </a>

        @else
            <a class="button is-disabled" rel="next">
                Nästa
            </a>
        @endif
    </div>
@endif
