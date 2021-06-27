@extends('layouts.main')
@section('title', 'List User - Admin')

@section('container')
    <!-- Begin Page Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="container-fluid">
                                    <a href="{{ route('admin.create') }}" class="btn btn-primary">Tambah User</a>
                                    <table id="list" class="display">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIS</th>
                                                <th>Nama</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $dt)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $dt->nis }}</td>
                                                <td>{{ $dt->name }}</td>
                                                <td>{{ $dt->email }}</td>
                                                <td>{{ $dt->password }}</td>
                                                <td></td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#list').DataTable({
                "scrollY":'100vh',
                "scrollCollapse":true,
                "responsive": true,
                "paging":false,
                
            } );
        } );
    </script>
@endsection
