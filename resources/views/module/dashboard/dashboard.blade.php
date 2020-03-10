@extends('index')

@section('contenido')
    <section class="contenedor">

        {{--
        <p>Users</p>
        <table id="users" class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                </tr>
            </thead>
        </table>
        --}}

        <table id="posts" class="table">
            <thead>
                <tr>
                    <th>PId</th>
                    <th>PTitle</th>
                    <th>PContent</th>
                    <th>UName</th>
                    <th>UEmail</th>
                </tr>
            </thead>
        </table>



    </section>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/libs/Datatables/responsive.bootstrap4.min.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('js/libs/dataTables.responsive.min.js') }}"></script>

    <script>

        $(document).ready(function(){
            $('#posts').DataTable({
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "lengthMenu": [5,10,20],
                "ajax": "{{route('post.datatables')}}",
                "columns": [
                    {data:'id',name: 'posts.id'},
                    {data:'title',name: 'posts.title'},
                    {data:'content',name: 'posts.content'},
                    {data:'name',name: 'users.name'},
                    {data:'email',name: 'users.email'},
                ],
                "language": {
                    "info": "_TOTAL_ registros",
                    "search": "Buscar",
                    "paginate": {
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                    "lengthMenu": 'Mostrar <select>' +
                        '<option value="5">5</option>' +
                        '<option value="10">10</option>' +
                        '<option value="20">20</option>' +
                        '<option value="-1">Todos</option>' +
                        '</select> registros',
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "emptyTable": "No hay datos",
                    "zeroRecords": "No hay coincidencias",
                    "infoEmpty": "",
                    "infoFiltered": ""
                }
            });
        });

    </script>



    {{--
    <script>

        $(document).ready(function() {
            $('#users').DataTable({
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "lengthMenu": [5,10,20],
                "ajax": "{{route('user.datatables')}}",
                "columns": [
                    {data: 'id'},
                    {data: 'name'},
                    {data: 'email'},
                ],
                "language": {
                    "info": "_TOTAL_ registros",
                    "search": "Buscar",
                    "paginate": {
                        "next": "Siguiente",
                        "previous": "Anterior"
                    },
                    "lengthMenu": 'Mostrar <select>' +
                        '<option value="5">5</option>' +
                        '<option value="10">10</option>' +
                        '<option value="20">20</option>' +
                        '<option value="-1">Todos</option>' +
                        '</select> registros',
                    "loadingRecords": "Cargando...",
                    "processing": "Procesando...",
                    "emptyTable": "No hay datos",
                    "zeroRecords": "No hay coincidencias",
                    "infoEmpty": "",
                    "infoFiltered": ""
                }
            });
        });
    </script>
    --}}
@endpush
