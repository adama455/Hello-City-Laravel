<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/tailwindcss@2.2.19/dist/tailwind.min.css" />

        <title>@yield('title', config('app.name'))</title>
        

    </head>
    <body class=" py-6 flex flex-col items-center justify-between min-h-screen">
       <main role="main " class="flex flex-col items-center justify-center ">
           @yield('contenu')
       </main>

        <footer class="text-gray-400">
            <p>&copy; Copyright {{date("Y")}} 
            @if(!Route::is ('about'))
                &middot; <a href="{{route('about')}}" class="text-indigo-600 underline">About Us</a></p>
            @endif
        </footer>
    </body>
</html>
