@extends('layouts.main')
@section('title', 'Home - Admin')

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
@endsection
