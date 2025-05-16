{{--  コントロールから呼び出されるedit画面ビュー  --}}
<x-layouts.app>

    <x-slot:title>
        商品の編集
    </x-slot>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <x-ui.notification type="danger" :message="$error" />
            @endforeach
        @endif

    <x-ui.forms.input
        :cancelAction="['url' => route('items.index'), 'label' => '一覧へ戻る', 'class' => ''] "
        :displayInfo="$displayInfo"
        :submitAction="$submitAction"
        :item="$item"
    />

</x-layouts>
