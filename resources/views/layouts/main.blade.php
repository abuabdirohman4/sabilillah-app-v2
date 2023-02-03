<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Absensi Brangsong</title>
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
    <script src="{{ asset('build/assets/app.js') }}"></script>
    {{-- @vite('resources/css/app.css')
    @vite('resources/js/app.js') --}}
    @livewireStyles
</head>

<body class="bg-gray-100">
    <div class="p-4 h-full max-w-md mx-auto">
        <x-navbar />
        <main class="">
            @yield('content')
        </main>
    </div>
    @livewireScripts
    @livewireScripts
</body>

</html>
