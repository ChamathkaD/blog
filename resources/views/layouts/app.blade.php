<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>


        {{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<!--    <link href="{{ asset('bootstrap/bootstrap-5.0.0-beta1-dist/css/bootstrap.min.css') }}" rel="stylesheet">-->

    <style>

      .form-control:focus {
          border-color: #38c172;
          box-shadow: 0 0 0 3px rgba(56, 193, 114, 0.25);
      }

      /* changed file input box-shadow color */
      .custom-file-input:focus ~ .custom-file-label {
          border-color: #38c172;
          box-shadow: 0 0 0 3px rgba(56, 193, 114, 0.25);
      }

    </style>

    <link rel="stylesheet" href="{{asset('vendor/fontawesome-free-5.15.1-web/fontawesome-free-5.15.1-web/css/all.min.css')}}">

    @stack('css')

</head>
<body>
    <div id="app">

        @include('partials.navbar')

        <div style="text-align: center; font-family: 'Bodoni MT'; font-size: 80px">
            BLOG
        </div>


        @include('partials.header')



        <main class="py-4">
            @yield('content')
        </main>

        <hr>

        @include('partials.footer')

    </div>

@stack('js')
{{--    <script src="{{ asset(' bootstrap/bootstrap-5.0.0-beta1-dist/js/bootstrap.bundle.min.js') }}" defer></script>--}}
<script src="{{ asset('js/jquery.js') }}"></script>

    <script src="{{ asset('js/bs-custom-file-input.min.js') }}"></script>

<script>
    $(document).ready(function () {
        bsCustomFileInput.init()
    })
</script>


</body>
</html>
