
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
        <input type="hidden" value="{{ Auth::user()->nis }}" name="nis" id="" class="form-control" value="{{old('nis')}}">
            <input type="hidden" value="{{ Auth::user()->name }}" name="name" id="" class="form-control" value="{{old('name')}}">
        <div class="mt-2">
            <label for="juz">JUZ</label>
            <select name="juz" id="juz" class="form-control" :value="old('juz')" required>
                <option class="opacity-50">Pilih Juz</option>
                @for($juz=1;$juz <= 30; $juz++)
                    <option value="{{ $juz }}">Juz {{ $juz }}</option>
                @endfor
            </select>
        </div>
        <div class="mt-2">
            <label for="surah">SURAT</label>
            <select name="surah" id="surah" class="form-control" :value="old('surah')" required>
                <option class="opacity-50">Pilih Surah</option>
                @foreach ($data as $dt)
                    <option value="{{ $dt['nama_latin'] }}" class="">{{$dt['nama_latin']}}</option>
                @endforeach
            </select>
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
