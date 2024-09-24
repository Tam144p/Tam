<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ config('app.name', 'laravel') }}</title>

    <!-- fonts -->
     <link rel="preconnect" href="https://fonts.bunny.net">
     <link rel="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- scripts -->
     @Vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
     <body class="fonts-sans antialiased">
        <div class="min-h-screen bg-gray-100 flex">
            <aside>
                @include('components.dashboard-sidebar')
            </aside>
        
        <main class="w-full">
            @include('components.dashboard-header')
            {{ $slot }}
        </main>
        </div>
        @include('sweetalert::alert')
</body>
</html>