<nav class="navbar gawazy-bg navbar-expand-lg navbar-light">
    <div class="container">
        <button class="navbar-toggler focus-ring focus-ring-light" type="button" data-toggle="collapse"
                data-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{url('images/gawazyLogos/gawazy-logo-dark.svg')}}" class="gawazy-logo">
        </a>
        <div class="lang-menu">
            <button class="selected-lang btn" onclick="on()">
                <img id="lang_img" src="{{url('images/langs/arabic.png')}}">
            </button>
            <ul class="bg-white m-0 p-0 position-absolute rounded">
                <li>
                    <a id="ar_btn" class="d-block text-center p-3 rounded" href=""><img
                            src="{{url('images/langs/arabic.png')}}"></a>
                </li>
                <li>
                    <a id="en_btn" class="d-block text-center p-3 rounded" href=""><img
                            src="{{url('images/langs/english.png')}}"></a>
                </li>
            </ul>
        </div>

        <div class="collapse navbar-collapse mx-0" id="navbarText">
            @include('site.widgets.home.navList')
            <span class="navbar-text">

                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <button id="gawazy-btn" class="btn rounded">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('actions.logIn') }}</a>
                                </li>
                            </button>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('actions.logOut') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </span>
        </div>
    </div>
</nav>
