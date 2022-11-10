<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- Meta Tags --}}
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {{-- Title --}}
        <title> {{ config('app.name', 'Laravel') }} </title>

        {{-- Styles --}}
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        @stack('styles')        
    </head>
    <body>
        @include('layouts.navigation')
        <div class="app">
            @yield('content')
        </div>
        @stack('scripts')
    </body>
</html>