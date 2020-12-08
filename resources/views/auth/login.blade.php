@extends('layouts.app')

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animate/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/css-hamburgers/hamburgers.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/animsition/css/animsition.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/select2/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

@endpush

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="limiter">
                <div class="container-login100">
                    <div class="wrap-login100">
                        <div class="login100-form-title" style="background-image: url({{ asset('img/bg-01.jpg') }});">
					<span class="login100-form-title-1">
						{{ __('Login') }}
					</span>
                        </div>

                        <form class="login100-form validate-form" method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="wrap-input100 validate-input m-b-26" data-validate="email is required">
                                <span class="label-input100">{{ __('E-Mail Address') }}</span>
                                <input
                                    id="email"
                                    class="input100 @error('email') is-invalid @enderror"
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    placeholder="Enter user Email"
                                    required
                                    autocomplete="email"
                                    autofocus
                                >
                                <span class="focus-input100"></span>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
                                <span class="label-input100">{{__('Password') }}</span>
                                <input id="password"
                                       class="input100 @error('password') is-invalid @enderror"
                                       type="password"
                                       name="password"
                                       placeholder="Enter password"
                                        required
                                        autocomplete="current-password">
                                <span class="focus-input100"></span>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="flex-sb-m w-full p-b-30">
                                <div class="contact100-form-checkbox">
                                    <input class="input-checkbox100"
                                           id="ckb1"
                                           {{ old('remember') ? 'checked' : '' }}
                                           type="checkbox"
                                           name="remember">
                                    <label class="label-checkbox100" for="ckb1">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>

                                <div>
                                    @if (Route::has('password.request'))
                                        <a class="txt1" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn" type="submit">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


@endsection
@push('js')

    <script src="{{ asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('vendor/animsition/js/animsition.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('vendor/countdowntime/countdowntime.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

@endpush
