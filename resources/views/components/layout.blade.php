<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body >
        <header class="p-6 shadow-lg">
            <nav class="flex justify-between items-center">
                <a href="#" class="text-3xl"><img src="" alt="" width="50">Passionist Sisters' School</a>

                <div class="flex items-center gap-4">
                    <a href="#" class="text-lg uppercase bg-lime-400 p-2 rounded font-medium hover:bg-lime-600 hover:text-white">Appointment</a>
                    <a href="#" class="text-lg uppercase bg-lime-400 p-2 rounded font-medium hover:bg-lime-600 hover:text-white">Blog</a>
                    <a href="#" class="text-lg uppercase bg-lime-400 p-2 rounded font-medium hover:bg-lime-600 hover:text-white">About</a>
                </div>
            </nav>
        </header>
        <main>
            {{ $slot }}
        </main>
        <footer class="p-6 relative flex items-center justify-center">
                
            <div class="absolute inset-x-0 top-0 h-2 -mt-1 bg-white shadow-md"></div>
                <h3>Copyright © 2024 Passionist Sisters' School</h3>
            </div>
        </footer>
    </body>
</html>
