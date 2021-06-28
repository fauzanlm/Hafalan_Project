@extends('layouts.main')
@section('title', 'halaman utama')

@section('container')
    <!-- Begin Page Content -->
    <div class="row">
        <div class="col-md-12">
            <div class="container-fluid">

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">History Hafalan</h6>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{session('status')}}
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>NIS</th>
                                        <th>NAMA</th>
                                        <th>JUZ</th>
                                        <th>SURAT</th>
                                        <th>REKAMAN</th>
                                        <th>STATUS</th>
                                        <th>AKSI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $dt)
                                        <tr class="text-center">
                                            <td>{{$dt->nis}}</td>
                                            <td>{{$dt->name}}</td>
                                            <td>{{$dt->juz}}</td>
                                            <td>{{$dt->surat}}</td>
                                            <td>
                                                <audio controls>
                                                    <source src="{{asset('audio/'. $dt->audio)}}" type="audio/mpeg" >
                                                        Your Browser does not support the audio element
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
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>
@endsection
