@extends('layouts.app')
@section('content')
    <div class="mb-3 mx-1">
        <div class="row">
            <div class="col-md-4">
                <h3 class="fw-bold fs-4 mb-3">Users</h3>
            </div>
            <div class="col-md-8">
                Print
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered datatable_user" style="width:100%">
                    <thead>
                        <tr class="highlight">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $v)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <th>{{ $v->name }}</th>
                                <th>{{ $v->username }}</th>
                                <th>{{ $v->email }}</th>
                                <th>{{ $v->role }}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script>
        $(document).ready(function() {
            $('.datatable_user').DataTable();
        });
    </script>
@endpush
