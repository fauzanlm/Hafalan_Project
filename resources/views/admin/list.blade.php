@extends('layouts.main')
@section('title', 'List User - Admin')

@section('container')
    <!-- Begin Page Content -->
 
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if (session('failed'))
        <div class="alert alert-danger" role="alert">
            {{ session('failed') }}
        </div>
    @endif
    <a href="{{ route('admin.create') }}" class="mb-2 btn btn-primary">Tambah User</a>
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Email</th>
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
                <td>
                    <a href="{{ route('admin.edit',$dt->id) }}" class="btn btn-warning">Edit</a>
                    <form action="#" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger ">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  
@endsection
