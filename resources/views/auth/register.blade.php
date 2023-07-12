@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-info">{{ __('Register') }}</div>

                    <div class="card-body" style="background-color: #4f4f4f">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name"
                                    class="col-md-4 col-form-label text-md-end text-light">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end text-light">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for=""
                                    class="col-md-4 col-form-label text-md-end text-light">{{ __('Sexuality') }}</label>

                                <div class="col-md-6">
                                    <div class="form-check">
                                        <input class="form-check-input @error('jenkel') is-invalid @enderror"
                                            type="radio" name="jenkel" id="laki" value="L"
                                            {{ old('jenkel') == 'L' ? 'checked' : '' }} required>
                                        <label class="form-check-label text-light" for="laki">Male</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input @error('jenkel') is-invalid @enderror"
                                            type="radio" name="jenkel" id="perempuan" value="P"
                                            {{ old('jenkel') == 'P' ? 'checked' : '' }} required>
                                        <label class="form-check-label text-light" for="perempuan">Female</label>
                                    </div>

                                    @error('jenkel')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="date"
                                    class="col-md-4 col-form-label text-md-end text-light">{{ __('Date of birth') }}</label>

                                <div class="col-md-6">
                                    <input id="birthdate" type="date"
                                        class="form-control @error('birthdate') is-invalid @enderror" name="birthdate"
                                        value="{{ old('birthdate') }}" required autocomplete="off">

                                    @error('birthdate')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end text-light">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end text-light">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="offset-md-5">
                                    <button type="submit" class="btn btn-info">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
