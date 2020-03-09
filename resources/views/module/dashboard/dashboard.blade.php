@extends('index')

@section('contenido')
    <section class="contenedor">

        <p>Dashboard</p>

        <table id="users" class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
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

        $(document).ready(function() {
            $('#users').DataTable({
                "processing": true,
                "serverSide": true,
                "responsive": true,
                "ajax": "{{route('user.index')}}",
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
                        '<option value="15">10</option>' +
                        '<option value="30">30</option>' +
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
@endpush
