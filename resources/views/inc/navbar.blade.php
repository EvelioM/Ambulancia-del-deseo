<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <a class="navbar-brand" href="{{ url('/') }}">@lang('lang.ambulancia')</a>    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarDeseo" 
            aria-controls="navbarDeseo" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-md-center" id="navbarDeseo">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">@lang('lang.home')</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/fundacion">@lang('lang.foundation')</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/noticias">@lang('lang.news')</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/patrocinadores">@lang('lang.sponsors')</a>
            </li>
            <li class="nav-item active">
                    <a class="nav-link" href="/donar">@lang('lang.donate')</a>
            </li>
            <li class="nav-item active">
                    <a class="nav-link" href="/contacto">@lang('lang.contact')</a>
            </li>
            @if (!Auth::guest())
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownGestion" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('lang.manage')</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownGestion">
                        @if (Auth::user()->is_admin)
                            <a class="dropdown-item" href="/deseos">@lang('lang.show-wishes')</a>
                            <a class="dropdown-item" href="/usuarios">@lang('lang.show-users')</a>
                        @endif   
                        @if (Auth::user()->is_solicitor)
                            <a class="dropdown-item" href="/deseos/create">@lang('lang.make-wish')</a>
                        @endif  
                        @if (Auth::user()->is_volunteer)
                            <a class="dropdown-item" href="/dates">@lang('lang.select-dates')</a>
                        @endif   
                    </div>
                </li>
            @endif
        </ul>
        <ul class="navbar-nav ml-auto">
        <li class="dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ Config::get('languages')[App::getLocale()] }}
            </a>
            <ul class="dropdown-menu">
                @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                        <li>
                            <a href="{{ route('lang.switch', $lang) }}" class="dropdown-item">{{$language}}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </li>
    </ul>
        <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">@lang('lang.login')</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">@lang('lang.register')</a>
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
                                {{ __('lang.logout') }}
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
