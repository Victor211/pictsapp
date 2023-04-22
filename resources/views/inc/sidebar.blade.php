<div class="left-sidenav" id="notify-tour-3">
    <ul class="metismenu left-sidenav-menu">
        <li>
            <a href="{{ url('home') }}">
                <i class="fab fa-houzz" aria-role="presentation" aria-label="HOUSE"></i>
                Inicio
            </a>
        </li>
        <li>
            <a><i class="fas fa-wrench"></i><span></span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                <span class="badge badge-success float-center mr-3">Definiciones</span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item"><a class="nav-link" href="{{ url('paises') }}"><i class="far fa-map"></i>Paises</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('departamentos') }}"><i class="fas fa-map-signs"></i>Departamentos</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('ciudades') }}"><i class="fas fa-map-marker-alt"></i>Ciudades</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('barrios') }}"><i class="fas fa-map-pin"></i>Barrios</a></li>

                <li class="nav-item"><a class="nav-link" href="{{ url('tipotest') }}"><i class="fas fa-list "></i>Tipos Test</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('tiposevaluacion') }}"><i class="fas fa-list "></i>Tipos Evaluación</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('preguntas') }}"><i class="fas fa-comment "></i>Preguntas</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('respuestas') }}"><i class="fas fa-comments "></i>Respuestas</a></li>
            </ul>
        </li>
        <li>
            <a><i class="fas fa-user-friends"></i><span></span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                <span class="badge badge-danger float-center mr-3">Personas</span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li class="nav-item"><a class="nav-link" href="{{ url('pacientes') }}"><i class="fas fa-user "></i>Registrar</a></li>
            </ul>
        </li>
        <li>
            @if (Auth::user()->id === 1)
                <a><i class="far fa-clipboard"></i><span></span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                    <span class="badge badge-warning float-center mr-3">Ejercicios</span>
                </a>
                <ul class="nav-second-level" aria-expanded="false">
                    <li class="nav-item"><a class="nav-link" href="{{ url('ejercicios') }}"><i class="far fa-list-alt"></i>Evaluaciones</a></li>
                </ul>
            @endif
        </li>
    </ul>
</div>