@extends('layouts.app')

@push('css')


    <link rel="stylesheet" type="text/css" href="{{asset('css/nunito-font.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>

@endpush

@section('content')

    <div class="page-content">
        <div class="form-v6-content mt-5">
            <div class="form-left">
                <img src="{{ asset('img/form-v6.jpg') }}" alt="form">
            </div>
            <form class="form-detail" action="{{ route('register') }}" method="post">
                @csrf
                <h2>{{ __('Register') }}</h2>

                <div class="form-row">
                    <input
                        type="text"
                        name="firstname"
                        id="firstname"
                        class="input-text @error('firstname') is-invalid @enderror"
                        placeholder="Your First Name"
                        value="{{ old('firstname') }}"
                        autocomplete="First Name"
                        autofocus
                        required>
                    @error('firstname')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                </div>

                <div class="form-row">
                    <input
                        type="text"
                        name="lastname"
                        id="lastname"
                        class="input-text @error('lastname') is-invalid @enderror"
                        placeholder="Your Last Name"
                        value="{{ old('lastname') }}"
                        autocomplete="Last Name"
                        autofocus
                        required>
                    @error('lastname')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                </div>

                <div class="form-row">
                    <input type="email"
                           name="email"
                           id="email"
                           class="input-text @error('email') is-invalid @enderror"
                           placeholder="Email Address"
                           value="{{ old('email') }}"
                           autocomplete="email"
                           required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                </div>

                <div class="form-row">
                    <input
                        type="password"
                        name="password"
                        id="password"
                        class="input-text @error('password') is-invalid @enderror"
                        placeholder="Password"
                        autocomplete="new-password"
                        required>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>

                <div class="form-row">
                    <input
                        type="password"
                        name="password_confirmation"
                        id="password-confirm"
                        class="input-text"
                        placeholder="Comfirm Password"
                        autocomplete="new-password">
                        required>
                </div>
                <div class="form-row-last">
                    <input type="submit" name="register" class="register" value="{{ __('Register') }}">
                </div>
            </form>
        </div>
    </div>


{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
@endsection
