<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}"/>

        <title>{{config('app.name', 'Ambulancia del deseo')}}</title>
    </head>
    <body>
        <script src="{{asset('js/app.js')}}"></script>
        @include('inc.navbar')
        <main class="container">
            @include('inc.messages')
            @yield('content')
        </main>
    </body>
</html>