<nav id="sidebar" class="sidebar">
    <div class="sidebar-container">
        <div class="sidebar-container-brand">
            <img class="image" src="{{ asset( 'img/logo.png' ) }}" alt="Random logo" />
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
        <a class="sidebar-container-item" href="{{ url( '/' ) }}">Flöde</a>
        <a class="sidebar-container-item" href="{{ route( 'posts.index' ) }}">Alla inlägg</a>
        <a class="sidebar-container-item" href="{{ route( 'about.blog' ) }}">Om bloggen</a>
        <a class="sidebar-container-item sub" href="{{ route( 'about.me' ) }}">Om mig</a>
    </div>
</nav>
