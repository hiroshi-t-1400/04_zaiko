<x-layouts.app>

    <div class="main-container grid grid-cols-[minmax(min-content,_800px)] gap-4 place-content-center ">

        <x-title>
            商品の一覧
        </x-title>

        <div class="items-index-wrapper">

            <x-data-table :tableHeaders="$tableHeaders" :items="$items" :options="$options" />

        </div>

    </div>

</x-app>
