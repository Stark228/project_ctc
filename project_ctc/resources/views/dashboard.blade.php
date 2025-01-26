<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>New Cars</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body class="font-sans antialiased">
    @include('layouts.navigation')

    <div class="mt-20">
    <!-- Page Title Section -->
    <div class="bg-gray-100 py-8 px-6">
        <div class="max-w-7xl mx-auto text-center">
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900">
                Discover Cars Built for Every Journey
            </h1>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 py-6 px-6">
        <!-- Filter Section -->
        <div class="col-span-1">
            @include('layouts.filter')
        </div>

        <!-- Car Listing Section -->
        <div class="col-span-1 md:col-span-3">
            <div class="col-span-1 md:col-span-3">
                <div class="space-y-6">
                    <a href="{{ route('blog') }}" >
                        @include('components.car-card')
                    </a>
                    <a href="{{ route('blog') }}" >
                        @include('components.car-card')
                    </a>
                    <a href="{{ route('blog') }}" >
                        @include('components.car-card')
                    </a>
                    <a href="{{ route('blog') }}" >
                        @include('components.car-card')
                    </a>
                    <a href="{{ route('blog') }}" >
                        @include('components.car-card')
                    </a>
                    <a href="{{ route('blog') }}" >
                        @include('components.car-card')
                    </a>
                </div>
            </div>
    </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
</body>
</html>