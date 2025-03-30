{{-- template --}}
{{-- コントローラーから呼び出すとき --}}
{{--
public function () {
    $items = Item::all();
    $headers = ['商品名', '数量', '単位', '購入日', '価格', 'カテゴリ',]
    return view('items.index' compact('items', 'headers'));
}
--}}


<table class="border-collapse border border-gray-600">
    <thead>
        <tr>
            @foreach ($labels as $label)
                <th class="border boder-gray-500 px-3">{{ $label }}</th>
            @endforeach
            {{-- <th class="border boder-gray-500 px-3">操作</th> --}}
        </tr>
    </thead>

    <tbody>
        @foreach ($items as $item)
            <tr>
                @foreach ($labels as $label)
                    <td  class="border boder-gray-500 px-3">{{ $item->label }}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
