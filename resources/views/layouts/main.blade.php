<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>AOB - @yield('title')</title>

        <script src="{{ asset('/js/jquery.js') }}"></script>
        <script src="{{ asset('/js/materialize.min.js') }}"></script>
        <script src="{{ asset('/js/script.js') }}"></script>

        <link rel="stylesheet" href="{{ asset('/css/materialize.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}"/>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>

    <body>

        <input id="BASE_URL" type="hidden" value="{{ URL::to('/') }}"/>
        @yield('content')

    </body>

</html>