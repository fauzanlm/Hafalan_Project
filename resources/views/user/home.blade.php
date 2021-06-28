
@extends('layouts.main')
@section('title', 'Home')
@section('container')

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

    <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mt-2">
            <label for="juz">JUZ</label>
            <input type="text" name="juz" id="juz" class="form-control" value="{{old('juz')}}">
            <input type="hidden" value="{{ Auth::user()->nis }}" name="nis" id="" class="form-control" value="{{old('nis')}}">
            <input type="hidden" value="{{ Auth::user()->name }}" name="name" id="" class="form-control" value="{{old('name')}}">
        </div>
        <div class="mt-2">
            <label for="inputSurat">SURAT</label>
            <input type="text" name="surat" id="inputSurat" class="form-control" value="{{old('surat')}}">
        </div>
        <div class="mt-2">
            <label for="audio">Rekaman Hafalan</label>
            <input type="file" name="audio" id="audio" class="form-control" value="{{old('audio')}}">
        </div>
        <div class="mt-2">
            <button type="submit" class="btn btn-outline-primary mt-3" onclick="return confirm('Yakin?')">Setorkan</button>
        </div>
        
    </form>

@endsection
