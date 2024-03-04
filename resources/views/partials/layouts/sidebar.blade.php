<nav id="sidebar" class="sidebar">
    <div class="sidebar-container">
        <div class="sidebar-container-brand">
            <a href="{{ url('/') }}">
                <img class="image" src="{{ asset( 'img/logo.png' ) }}" alt="Random logo" />
            </a>
        </div>
        @auth
            <a class="sidebar-container-item" href="{{ route( 'user.profile' ) }}">Profil</a>
            <a class="sidebar-container-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                Logga ut
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <hr class="separator no-margin">
        @endauth
        <a class="sidebar-container-item {{ Request::is( '/' ) ? 'active' : '' }}" href="{{ url( '/' ) }}">Flöde</a>
        <a class="sidebar-container-item {{ Request::segment( 1 ) == 'inlägg' ? 'active' : '' }}" href="{{ route( 'posts.index' ) }}">Alla inlägg</a>
        <a class="sidebar-container-item {{ Request::segment( 2 ) == 'bloggen' ? 'active' : '' }}" href="{{ route( 'about.blog' ) }}">Om bloggen</a>
        <a class="sidebar-container-item sub {{ Request::segment( 2 ) == 'mig' ? 'active' : '' }}" href="{{ route( 'about.me' ) }}">Om mig</a>
    </div>
</nav>
