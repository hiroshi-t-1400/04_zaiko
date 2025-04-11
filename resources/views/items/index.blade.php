<x-layouts.app>

    {{-- <div class="main-container grid grid-cols-[minmax(min-content,_800px)] gap-4 place-content-center ">

        <x-title>
            商品の一覧
        </x-title> --}}

        <x-slot:title>
            商品の一覧
        </x-slot>

        @if (session('success'))
            <x-ui.notification type="success" :message="session('success')" />
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <x-ui.notification type="danger" :message="$error" />
            @endforeach
        @endif


        <div class="items-index-wrapper">

            <x-data-table :tableHeaders="$tableHeaders" :items="$items" :options="$options" />

        </div>

    {{-- </div> --}}

</x-app>
