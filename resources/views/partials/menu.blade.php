<nav class="navbar  bg-body-tertiary fixed-top ">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            IE Maltería
        </a>
        <button class="navbar-toggler text-start" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas bg-secondary offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <img src="img/logo.jpg" width="50" alt="iemalteria" class="img-fluid img-thumbnail">
                <h5 class="title text-white" id="offcanvasNavbarLabel">Institucion Educativa Maltería</h5>                
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="navbar-nav  justify-content-start flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a href="{{ route('admin.home') }}" class="nav-link">
                            <p class="text-white">
                                <i class="fas fa-fw fa-tachometer-alt"></i>
                                Panel de Control
                            </p>
                        </a>
                    </li>
                    <li
                        class="nav-item has-treeview {{ request()->is('admin/permissions*') ? 'menu-open' : '' }} {{ request()->is('admin/roles*') ? 'menu-open' : '' }} {{ request()->is('admin/users*') ? 'menu-open' : '' }}">
                        <a class="nav-link nav-dropdown-toggle " >
                            <p class="text-white">
                                <i class="fa-fw fas fa-users"></i>
                                Administración de Usuarios
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.permissions.index') }}"
                                    class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                    <p class="text-white">
                                        <i class="fa-fw fas fa-unlock-alt"></i>
                                        Permisos
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.roles.index') }}"
                                    class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                    <p class="text-white">
                                        <i class="fa-fw fas fa-briefcase"></i>
                                        <span>Roles</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.users.index') }}"
                                    class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                    <p class="text-white">
                                        <i class="fa-fw fas fa-user"></i>
                                        <span>Usuarios</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>                    
                    <li class="nav-item">
                        <a href="{{ route('admin.groups.index') }}"
                            class="nav-link {{ request()->is('admin/groups') || request()->is('admin/groups/*') ? 'active' : '' }}">
                            <p class="text-white">
                                <i class="fa-fw fas fa-users"></i>
                                <span>Grupos</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.posts.index') }}"
                            class="nav-link {{ request()->is('admin/posts') || request()->is('admin/posts/*') ? 'active' : '' }}">
                            <p class="text-white">
                                <i class="fa-solid fa-image-portrait"></i>
                                <span>Publicaciones</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.settings.index') }}"
                            class="nav-link {{ request()->is('admin/settings') || request()->is('admin/settings/*') ? 'active' : '' }}">
                            <p class="text-white">
                                <i class="fa-fw fas fa-cogs"></i>
                                <span>Configuración de la Aplicación</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.schedule.index') }}"
                            class="nav-link {{ request()->is('admin/scheule') || request()->is('admin/scheule/*') ? 'active' : '' }}">
                            <p class="text-white">
                                <i class="fa-fw fas fa-calendar-days"></i>
                                <span>Agenda</span>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link"
                            onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                            <p class="text-white">
                                <i class="fas fa-fw fa-sign-out-alt">
                                </i>
                                <span>Cerrar Sesión</span>
                            </p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

{{-- <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">IE Maltería</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.home') }}">
                        <i class="fas fa-fw fa-tachometer-alt">
                        </i>
                        <span>Panel de Control</span>
                    </a>
                </li>                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Administración de Usuarios
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('admin.permissions.index') }}">Permisos</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.roles.index') }}">Roles</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.users.index') }}">Usuarios</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.settings.index') }}">Configuraciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.groups.index') }}">Grupos</a>
                </li>
                
            </ul>            
        </div>
    </div>
</nav> --}}
