<!DOCTYPE html>
<html lang="{{ str_replace('_', '_', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name='csrf-token' content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Zaiko Control') }}</title>

    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>

</head>
<body>

    <div class="isorate grid grid-cols-[minmax(auto,_200px)_auto] grid-rows-1">

        <div id="sidebar" class="side-part 100vh bg-orange-400 ">
            @include('common.sidebar')
        </div>


        <div class="main-part">
            @yield('content')

        </div>


    </div>

</body>
</html>
