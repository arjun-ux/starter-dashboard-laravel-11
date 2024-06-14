<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Boostrap 5</title>
    <link href="{{ asset('dist/css/lineicons.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/datatable/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/datatable/dataTableExport/buttons.bootstrap5.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/main.css') }}">
</head>
<body>
    <div class="wrapper">
        @include('layouts.sidebar')
        <div class="main">
            @include('layouts.navbar')
            <main class="content px-3 py-4">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

{{--  jquery 3.7  --}}
<script src="{{ asset('dist/js/jquery.min.js') }}"></script>
{{--  bootstrap 5.3  --}}
<script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
{{--  dataTable export  --}}
<script src="{{ asset('dist/js/datatable/dataTables.js') }}"></script>
<script src="{{ asset('dist/js/datatable/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('dist/js/datatable/dataTableExport/dataTables.buttons.js') }}"></script>
<script src="{{ asset('dist/js/datatable/dataTableExport/buttons.bootstrap5.js') }}"></script>
<script src="{{ asset('dist/js/datatable/dataTableExport/jszip.min.js') }}"></script>
<script src="{{ asset('dist/js/datatable/dataTableExport/pdfmake.min.js') }}"></script>
<script src="{{ asset('dist/js/datatable/dataTableExport/vfs_fonts.js') }}"></script>
<script src="{{ asset('dist/js/datatable/dataTableExport/buttons.html5.min.js') }}"></script>
<script src="{{ asset('dist/js/datatable/dataTableExport/buttons.print.min.js') }}"></script>
<script src="{{ asset('dist/js/datatable/dataTableExport/buttons.colVis.min.js') }}"></script>

{{--  main js  --}}
<script src="{{ asset('dist/js/main.js') }}"></script>
@stack('script')
</body>
</html>
