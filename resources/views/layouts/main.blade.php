<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Absensi Brangsong</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @livewireStyles
</head>

<body class="p-4 bg-gray-100 h-full max-w-lg mx-auto">
    <div>
        <x-navbar />
        <main class="">
            @yield('content')
        </main>
    </div>
    @livewireScripts
    @livewireScripts
</body>

</html>
