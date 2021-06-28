@extends('layouts.main')
@section('title', 'Edit - Admin')

@section('container')
    <!-- Begin Page Content -->
    <form method="POST" action="{{ route('admin.update', $data->id) }}">
        @csrf
        @method('patch')
        <div class="mt-1">
            <label for="nis" class="">{{ __('NIS') }}</label>

            <div class="">
                <input id="nis" value="{{ $data->nis }}" type="number" minlength="6" maxlength="6" class="form-control @error('nis') is-invalid @enderror" name="nis" value="{{ old('nis') }}" required autocomplete="nis" autofocus>

                @error('nis')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="mt-1">
            <label for="name"  class="">{{ __('Nama') }}</label>

            <div class="">
                <input id="name" type="text" value="{{ $data->name }}"class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                <input id="email" type="email" value="{{ $data->email }}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        
        <div class="mt-1">
            <label for="password" class="">{{ __('New/Old Password') }}</label>

            <div class="">
                <input id="password" type="password" value="" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="mt-1">
            <label for="password-confirm" class="">{{ __('Confirm New Password') }}</label>

            <div class="">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div class=" mb-0">
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">
                    {{ __('Update') }}
                </button>
            </div>
        </div>
    </form>
@endsection
