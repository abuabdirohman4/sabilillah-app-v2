@php
    $cwd = getcwd();
    $css = asset('build/assets/' . basename(glob($cwd . '/build/assets/*.css')[0], '.css') . '.css');
    $js = asset('build/assets/' . basename(glob($cwd . '/build/assets/*.js')[0], '.js') . '.js');
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Absensi Brangsong</title>
    {{-- <link rel="stylesheet" href="{{ $css }}" id="css">
    <script src="{{ $js }}" id="js"></script> --}}
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @livewireStyles
</head>

<body class="bg-gray-50 p-4  mx-auto overflow-hidden" style="max-width: ">
    <x-navbar />
    <main>
        @yield('content')
    </main>
    @livewireScripts
    @livewireScripts
</body>

</html>
