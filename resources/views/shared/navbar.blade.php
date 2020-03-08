<div class="l-navbar">

    <!-- Movil Hamburgesa -->
    <div class="navbar__movil">
        <div class="hamburger hamburger--slider" id="hamburger">
            <span class="hamburger__box">
                <span class="hamburger__inner"></span>
            </span>
        </div>

        <span>{{ \Request::path() }}</span>
    </div>

    <!-- Table ++  -->
    <div class="navbar">

        <div class="navbar__content">
            <button class="navbar__button-circle">
                <span> <i class="fas fa-align-justify"></i> </span>
            </button>
            <span>{{ \Request::path() }}</span>
        </div>

        <div class="navbar__photo dropdown dropleft">
            <img class="rounded-circle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                src="{{ asset('img/admin/usuario.png') }}"  alt="usuario">
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{url('/profile')}}">Mi Perfil</a>
                <a class="dropdown-item" href="{{url('/profile/configuration')}}">Configuración</a>
                <a class="dropdown-item" href="{{url('/login')}}">Salir</a>
            </div>
        </div>

    </div>

</div>
