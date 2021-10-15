<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="{{ mix('js/app.js') }}" defer></script>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('css/watch.css') }}" rel="stylesheet">

    <script src="{{ asset('test/index.js') }}" defer></script>
    <link rel="manifest" href="{{ asset('test/manifest.webmanifest') }}">
    @routes
</head>

<body>
    @inertia
    <button class="add-button">Add to home screen</button>
</body>

</html>
