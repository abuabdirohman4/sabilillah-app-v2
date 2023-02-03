@php
    $cwd = getcwd();
    $css = basename(glob('/Users/abuabdirohman/Documents/Project/prj-sabilillah-app/sabilillah-app-v2/public/build/assets/*.css')[0], '.css');
    $js = basename(glob('/Users/abuabdirohman/Documents/Project/prj-sabilillah-app/sabilillah-app-v2/public/build/assets/*.js')[0], '.js');
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Absensi Brangsong</title>
    <link rel="stylesheet" href="" id="css">
    <script src="" id="js"></script>
    <script>
        const css = "{{ $css }}"
        const js = "{{ $js }}"
        document.getElementById('css').href = `{{ asset('build/assets/${css}.css') }}`
        document.getElementById('js').src = `{{ asset('build/assets/${js}.js') }}`
    </script>
    {{-- @vite('resources/css/app.css')
    @vite('resources/js/app.js') --}}
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
