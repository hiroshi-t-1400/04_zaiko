{{-- template --}}
{{-- コントローラーから呼び出すとき --}}
{{--
public function () {
    $items = Item::all();
    $tableHeaders = ['name_ja', 'quantity', 'unit_of_measure', 'buy_date', 'price', 'category_id',]
    return view('items.index' compact('items', 'tableHeaders'));
}
--}}


<table class="border-collapse border border-gray-600">
    <thead>
        <tr>
            @foreach ($tableHeaders as $tableHeader)
            <th class="border boder-gray-500 px-3">{{ $tableHeader['displayName'] }}</th>
            @endforeach
        </tr>
    </thead>

    <tbody>
        @foreach ($items as $item)
            <tr>
                @foreach ($tableHeaders as $tableHeader)

                {{-- @dd($item->$header) --}}
                <td class="border boder-gray-500 px-3">{{ $item->{$tableHeader['column']} }}</td>
                @endforeach
            </tr>
        @endforeach
    </tbody>
</table>
