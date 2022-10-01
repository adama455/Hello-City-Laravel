<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

        <title>@yield('title', config('app.name'))</title>
        

    </head>
    <body class="">
        <div class="container-sm">
            <div class="card w-25 border border-0 p-3">
                @yield('contenu')

            </div>

        </div>

        <footer class="">
            <p>&copy; Copyright {{date("Y")}} 
            @if(!Route::is ('about'))
                &middot; <a href="{{route('about')}}">About Us</a></p>
            @endif
        </footer>
    </body>
</html>
