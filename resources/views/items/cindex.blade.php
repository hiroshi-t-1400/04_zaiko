<x-layouts.app>

    <x-title>
        商品の一覧
    </x-title>

    <div class="items-index-wrapper">

        <x-show-all-items :labels="[
                            '商品名',
                            '数量',
                            '単位',
                            '購入日',
                            '価格',
                            'カテゴリ',
        ]" :model="\App\Models\Item::class">

        </x-show-all-items>

        {{-- テーブルのカラムヘッダー --}}


        {{-- <table class="border-collapse border border-gray-600">

                <thead>
                    <tr> --}}
                        {{-- @foreach ([
                            '商品名',
                            '数量',
                            '単位',
                            '購入日',
                            '価格',
                            'カテゴリ',
                            ] as $label)

                            <x-show-all-items>

                                <x-slot:label>{{ $label }}</x-slot>

                            </x-show-all-items>

                        @endforeach --}}


                        {{-- <th class="border boder-gray-500 px-3">操作</th>
                    </tr>
                </thead> --}}

                        {{-- <tbody>

                            <x-show-all-items model="Item">

                            </x-show-all-items>

                        </tbody> --}}
                        {{-- {{ $quantity }}
                        {{ $unit_of_measure }}
                        {{ $buy_date }}
                        {{ $price }}
                        {{ $category_id }} --}}

                        {{-- <th class="border boder-gray-500 px-3">商品名</th>
                        <th class="border boder-gray-500 px-3">数量</th>
                        <th class="border boder-gray-500 px-3">単位</th>
                        <th class="border boder-gray-500 px-3">購入日</th>
                        <th class="border boder-gray-500 px-3">価格</th>
                        <th class="border boder-gray-500 px-3">カテゴリ</th> --}}


            {{-- @foreach ($items as $item) --}}
                {{-- <tbody>
                    <tr>
                        <td  class="border boder-gray-500 px-3">牛乳</td>
                        <td  class="border boder-gray-500 px-3">1</td>
                        <td  class="border boder-gray-500 px-3">本</td>
                        <td  class="border boder-gray-500 px-3">2025/03/29</td>
                        <td  class="border boder-gray-500 px-3">249</td>
                        <td  class="border boder-gray-500 px-3">食品</td>

                        <td  class="border boder-gray-500 px-3">
                            <button type="submit" name="edit_id" value="1" formaction="{{ route('items.edit') }}">編集@csrf</button>
                            <button type="submit" name="destroy_id" value="{{ $item->id }}" formaction="{{ route('items.destroy') }}">削除@csrf</button>
                        </td>
                    </tr>
                </tbody>
            @endforeach --}}

        {{-- </table> --}}

    </div>


</x-app>
