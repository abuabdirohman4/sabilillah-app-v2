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
    @if (config('app.env') == 'local')
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
    @else
        <link rel="stylesheet" href="{{ $css }}" id="css">
        <script src="{{ $js }}" id="js"></script>
    @endif
    @livewireStyles
</head>

<body class="bg-gray-50 p-4 max-w-lg mx-auto overflow-hidden" style="max-width: 32rem">
    <x-navbar />
    <main>
        @yield('content')
    </main>
    @livewireScripts
    @livewireScripts
</body>

</html>
