<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
     <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <title>DC-ADMIN</title>
          <link rel="stylesheet" href=" {{ asset('css/app.css') }}">
     </head>

    <body>
        
    @include('admin.partials.header')
     
     <main>
          @yield('content')
     </main>

     </body>
    
</html>
