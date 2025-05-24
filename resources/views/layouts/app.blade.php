<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Zaiko Control') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

    <div class="isorate grid grid-cols-[minmax(auto,_200px)_auto] grid-rows-1">

        <div id="sidebar" class="side-part 100vh bg-orange-400 ">
            @include('common.sidebar')
        </div>


        <div class="main-part">
            @yield('content')

            {{-- 暫定的に、breezeによるprofileからの呼び出しに対応するため --}}
            @if (isset($slot))
                {{ $slot }}
            @endif
        </div>


    </div>

</body>
</html>
