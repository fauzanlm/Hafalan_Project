@extends('layouts.main')
@section('title', 'halaman utama')

@section('container')

            <h4 class="m-0 mb-2 font-weight-bold text-primary">History Hafalan</h4>
        
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
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Juz</th>
                            <th>Audio Hafalan</th>
                            <th>Rekaman</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dt)
                            <tr class="text-center">
                                <td>{{$loop->iteration}}</td>
                                <td>{{$dt->juz}}</td>
                                <td>{{$dt->surat}}</td>
                                <td>
                                    <audio controls>
                                        <source src="{{asset('audio/'. $dt->audio)}}" type="audio/mpeg" >
                                    </audio>
                                </td>
                                <td>{{$dt->status}}</td>
                                <td>
                                    <a href="#" class="btn btn-warning">Edit</a>
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
