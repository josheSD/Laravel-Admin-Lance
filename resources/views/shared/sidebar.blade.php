<div class="l-sidebar">
    <div class="sidebar__enterprise">
        <img class="sidebar_photo" src="{{ asset('img/admin/Laravel.png') }}" alt="empresa">
        <p>Lance Admin</p>
    </div>
    <div class="sidebar__items">

        <div class="sidebar__user" id="btn_usuario">
            <img class="sidebar__user-icon" src="{{ asset('img/admin/usuario.png') }}" alt="usuario">
            <p>Usuario</p>
        </div>

        <a class="sidebar__user marcador display-none" href="{{url('/profile') }}">
            <p style="color:#fff" class="sidebar__user-icon">MP</p>
            <p style="color:#fff">Mi Perfil</p>
        </a>

        <a class="sidebar__user marcador display-none" href="{{url('/profile/configuration')}}">
            <p style="color:#fff" class="sidebar__user-icon">CO</p>
            <p style="color:#fff">Configuración</p>
        </a>

        <a class="sidebar__user marcador display-none" href="{{url('/login')}}">
            <p style="color:#fff" class="sidebar__user-icon">S</p>
            <p style="color:#fff">Salir</p>
        </a>

        <hr class="border-bottom">

        <a href="{{url('/dashboard')}}" class="nav marcador active">
            <span style="color:#fff">Dashboard</span>
        </a>
        <a href="{{url('/profile')}}" class="nav marcador">
            <span style="color:#fff">Profile</span>
        </a>
        <a href="{{url('/profile/configuration')}}" class="nav marcador">
            <span style="color:#fff">Configuration</span>
        </a>

    </div>
</div>
