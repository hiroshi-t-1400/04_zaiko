{{--  コントロールから呼び出されるedit画面ビュー  --}}
<x-layouts.app>

    <x-slot:title>
        商品の編集
    </x-slot>


    <x-ui.forms.input


        :cancelAction="['url' => route('items.index'), 'label' => '一覧へ戻る', 'class' => ''] "
        />

    </x-ui>

</x-layouts>

