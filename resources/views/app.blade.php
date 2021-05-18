<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <meta content="SNB" name="description">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="shortcut icon" href="{{ asset('images/favicons/favicon.ico') }}">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name') }}</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>

    <body>

        <div id="app" class="w-100"></div>

        <script src="{{ asset('js/app.js') }}"></script>

   </body>

</html>
