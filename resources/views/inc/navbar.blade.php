<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <a class="navbar-brand" href="{{ url('/') }}">Ambulancia del deseo</a>    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDeseo" 
            aria-controls="navbarDeseo" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-md-center" id="navbarDeseo">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Inicio</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/fundacion">La Fundación</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/noticias">Noticias</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/patrocinadores">Patrocinadores</a>
            </li>
            <li class="nav-item active">
                    <a class="nav-link" href="/donar">Donar</a>
            </li>
            <li class="nav-item active">
                    <a class="nav-link" href="/contacto">Solicitar contacto</a>
            </li>
            @if (!Auth::guest())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownGestion" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Gestión</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownGestion">
                        @if (Auth::user()->is_admin)
                            <a class="dropdown-item" href="/deseos">Ver deseos</a>
                        @endif   
                        @if (Auth::user()->is_solicitor)
                            <a class="dropdown-item" href="/deseos/create">Solicitar deseo</a>
                        @endif  
                        @if (Auth::user()->is_volunteer)
                            <a class="dropdown-item" href="/dates">Seleccionar fechas disponibles</a>
                        @endif   
                    </div>
                </li>
            @endif
        </ul>
        <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Cerrar sesión') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
    </div>
</nav>
