<div id="menu" class="menu">
    <div class="menu-container">
        @auth
            <a class="menu-container-item" href="{{ route( 'user.profile' ) }}">Profil</a>
            <a class="menu-container-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                Logga ut
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <hr class="separator no-margin">
        @endauth
        <a class="menu-container-item" href="{{ url( '/' ) }}">Flöde</a>
        <a class="menu-container-item" href="{{ route( 'posts.index' ) }}">Alla inlägg</a>
        <a class="menu-container-item" href="{{ route( 'about.blog' ) }}">Om bloggen</a>
        <a class="menu-container-item sub" href="{{ route( 'about.me' ) }}">Om mig</a>
    </div>
</div>

<div class="navigation">
    <div class="navigation-container">
        <a class="navigation-container-item" href="{{ url( '/' ) }}">
            <img class="image" src="{{ asset( 'img/logo.png' ) }}" alt="Random logo">
        </a>
        <a class="navigation-container-item">
            <img id="navigation-menu" class="image" src="{{ asset( 'img/menu.svg' ) }}" alt="Menu icon">
        </a>
    </div>
</div>
