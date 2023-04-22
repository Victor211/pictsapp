<div class="topbar-left">
    <a href="{{ url('home') }}" class="logo">
        <span>
            <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="logo-large" class="logo-sm"> 
        </span>
    </a>
</div>
<nav class="navbar-custom">
    <ul class="list-unstyled topbar-nav float-right mb-0">
        <li class="dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#"
                role="button" aria-haspopup="false" aria-expanded="false">{{ Auth::user()->nombre }}
                <img src="assets/images/users/user-1.jpg" alt="profile-user" class="rounded-circle" />
                <span class="ml-1 nav-user-name hidden-sm"><i class="mdi mdi-chevron-down"></i> </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                {{-- <a class="dropdown-item" href="{{ url('profile') }}"><i class="ti-user text-muted mr-2"></i> Perfil</a>
                <a class="dropdown-item" href="{{ url('user_data') }}"><i class="dripicons-gear text-muted mr-2" ></i> Configuración</a>
                <div class="dropdown-divider"></div> --}}
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">

                    <i class="ti-power-off text-muted mr-2"></i>Cerrar Sesion</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>

            </div>
        </li>
    </ul>
    <ul class="list-unstyled topbar-nav mb-0">
        <li>
            <button class="button-menu-mobile nav-link waves-effect waves-light">
                <i class="ti-menu nav-icon"></i>
            </button>
        </li>
    </ul>
</nav>
