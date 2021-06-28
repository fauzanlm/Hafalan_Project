
@extends('layouts.main')
@section('title', 'Home')
@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#setoranModal">
                        Setoran
                    </button>

                    {{-- modal --}}
                    <div class="modal fade" id="setoranModal" tabindex="-1" aria-labelledby="setoranModal" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="setoranModal">Setoran</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                   
                                    <input type="hidden" value="{{ Auth::user()->nis }}" name="nis" id="" class="form-control" value="{{old('nis')}}">
                                   
                                    <input type="hidden" value="{{ Auth::user()->name }}" name="name" id="" class="form-control" value="{{old('name')}}">
                                    <label for="">JUZ</label>
                                    <input type="text" name="juz" id="" class="form-control" value="{{old('juz')}}">
                                    <label for="inputSurat">SURAT</label>
                                    <input type="text" name="surat" id="inputSurat" class="form-control" value="{{old('surat')}}">
                                    <label for="audio">Rekaman Hafalan</label>
                                    <input type="file" name="audio" id="audio" class="form-control" value="{{old('audio')}}">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" onclick="return confirm('Yakin?')">Setorkan</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection
