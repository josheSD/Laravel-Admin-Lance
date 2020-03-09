<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/libs/font-awesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {{-- Datatables css --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
        {{-- Fin Datatables --}}
        @stack('styles')
    </head>
    <body>

    <div class="wrapper">
        <div class="main-sidebar" id="main-sidebar">
            <div class="sidebar" id="main-nav">
                <div class="sidebar__relative">
                    @include('shared.sidebar')
                </div>
                <div class="sidebar__background" style='background-image: url("{{ asset('img/admin/sidebar-1.jpg') }} ")'>
                </div>
            </div>
        </div>
        <div class="main-panel">
            @include('shared.navbar')
            @yield('contenido')
            @include('shared.footer')
        </div>
    </div>
    <script src="{{ asset('js/libs/jquery-3.4.1.min.js') }}"></script>
    {{-- Datatables Plugins --}}
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    {{-- Fin Datatables --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    @stack('scripts')
    <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>
