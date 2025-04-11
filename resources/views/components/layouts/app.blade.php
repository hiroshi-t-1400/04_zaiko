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
            <x-application.sidebar />
        </div>

        <div class="main-container grid grid-cols-[minmax(min-content,_800px)] gap-4 place-content-center ">

            {{-- <x-title>
                商品の一覧
            </x-title> --}}

            <div class="title-wrapper py-5 my-5 text-center">
                <h1 class="font-extrabold text-5xl">ざいこ コントロール</h1>
                <h2 class="font-bold text-3xl">商品管理システム</h2>
                <h3 class="font-bold text-3xl">{{ $title }}</h3>
            </div>


            <div class="main-part">
                {{ $slot }}
            </div>

        </div>

    </div>

</body>
</html>
