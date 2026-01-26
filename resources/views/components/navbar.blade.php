<nav class="navbar navbar-expand-lg bg-dark border-bottom" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('homepage')}}">
            <i class="bi bi-steam"></i>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('homepage')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('chi-siamo')}}">Chi siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contatti')}}">Contatti</a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        I nostri servizi
                    </a>
                    <ul class="dropdown-menu">
                        <li class="nav-item">
                            <a class="dropdown-item" href="{{route('course.index')}}">I nostri corsi</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item" href="{{route('article.index')}}">I nostri articoli</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item" href="{{route('category.index')}}">Tutte le categorie</a>
                        </li>
                        @auth
                        <li class="nav-item">
                            <a class="dropdown-item" href="{{route('course.create')}}">Inserisci i tuoi corsi</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item" href="{{route('article.create')}}">Inserisci i tuoi articoli</a>
                        </li>
                        <li class="nav-item">
                            <a class="dropdown-item" href="{{route('category.create')}}">Aggiungi una categoria</a>
                        </li>
                        @endauth
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    @auth
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ciao, {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="{{route('user.profile')}}" class="dropdown-item">Profilo personale</a>
                        </li>
                        <li>
                            <form class="dropdown-item" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="nav-link p-0 active">Logout</button>
                            </form>
                        </li>
                    </ul>
                    @else
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Login/Registrati
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
                        <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                    </ul>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>