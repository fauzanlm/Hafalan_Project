@extends('layouts.main')
@section('title', 'Add User - Admin')

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
                                    <form method="POST" action="{{ route('admin.store') }}">
                                        @csrf

                                        <div class="mt-1">
                                            <label for="nis" class="">{{ __('NIS') }}</label>

                                            <div class="">
                                                <input id="nis" type="text" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ old('nis') }}" required autocomplete="nis" autofocus>

                                                @error('nis')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mt-1">
                                            <label for="name" class="">{{ __('Nama') }}</label>

                                            <div class="">
                                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mt-1">
                                            <label for="email" class="">{{ __('Alamat Email') }}</label>

                                            <div class="">
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mt-1">
                                            <label for="password" class="">{{ __('Password') }}</label>

                                            <div class="">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="mt-1">
                                            <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                                            <div class="">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                            </div>
                                        </div>

                                        <div class=" mb-0">
                                            <div class="mt-3">
                                                <button type="submit" class="btn btn-primary">
                                                    {{ __('Tambah') }}
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
