<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>DC - @yield('page-title', 'comics website')</title>
        <link rel="stylesheet" href=" {{ asset('css/app.css') }}">
    </head>

    <body>
        
    @include('partials.header')
     
    @include('partials.jumbotron')

    <main>
        @yield('content')
    </main>

        @include('partials.footer')

    </body>
    
</html>
