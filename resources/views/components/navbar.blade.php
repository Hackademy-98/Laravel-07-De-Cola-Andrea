
        <div class="col-12">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="{{route('home')}}" ><i class="fa-solid fa-gamepad fs-2"></i></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('game.index')}}">Lista dei giochi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contatti</a>
                            </li> 

                            @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{Auth::user()->name}}
                                </a>
                                <ul class="dropdown-menu">
                                    <li> <a class="dropdown-item" href="{{route('games.create')}}">Crea un gioco</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li>  <form action="{{route('logout')}}" method="post">
                                        @csrf
                                        <button class="btn btn-light">Logout</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        @else
                        <a class="nav-link px-3" href="{{route('register')}}">Registrati</a>
                        <a class="nav-link px-3" href="{{route('login')}}">Login</a>
                        @endauth
                    </div>
                </div>
            </nav>
        </div>
