<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @session('success')
    <div class="alert alert-success" role="alert">{!!$value!!}</div>
    @endsession

    @session('error')
     <div class="alert alert-danger" role="alert">{!!$value!!}</div>
    @endsession

    @session('errorMessage')
     <div class="alert alert-danger" role="alert">{!!$value!!}</div>
    @endsession
    ds('success  ruim')

<div class="grid grid-cols-3 gap-4 h-full p-10">
    <div>
        <a
        button class="bg-yellow-600 rounded-lg shadow px-4 text-slate-900 hover:bg-opacity-80" href="{{ route('sHook') }}">
            Send webHook
        </button>
        </a>
    </div>

</div>
</body>
</html>
