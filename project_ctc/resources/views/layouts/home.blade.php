<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ClickToCar - @yield('title', 'Default')</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" href="{{ asset('assets/small_logo.png') }}" />
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif

        @livewireStyles
        @livewireScripts
    </head>
    <body class="font-sans antialiased">
        @include('layouts.navigation')
        <main>
            {{ $slot }}    
        </main>
        @include('layouts.footer')
    </body>
</html>

