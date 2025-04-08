<x-layouts.app>

    <div class="main-container grid grid-cols-[minmax(min-content,_800px)] gap-4 place-content-center ">

        <x-title>
            商品の一覧
        </x-title>

        @if (session('success'))
            <x-ui.alert type="success" :message="session('success')" />
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <x-ui.alert type="danger" :message="$error" />
            @endforeach
        @endif


        <div class="items-index-wrapper">

            <x-data-table :tableHeaders="$tableHeaders" :items="$items" :options="$options" />

        </div>

    </div>

</x-app>
