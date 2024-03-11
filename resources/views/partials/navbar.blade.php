<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            I.E Maltería
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <a class="dropdown-item" href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#personal">Personal</a>
            <a class="dropdown-item" href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#profesores">Profesores</a>
            <a class="dropdown-item" href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#agenda">Agenda</a>
            <a class="dropdown-item" href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#ubicación">Ubicación</a>
            <a class="dropdown-item" href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#proyectos">Proyectos</a>
            <a class="dropdown-item" href="{{ Route::current()->getName() != 'home' ? route('home') : '' }}#blog">Blog</a>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
