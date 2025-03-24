@extends('layouts.app')

@section('content')

        <div class="main-container grid grid-cols-[minmax(min-content,_800px)] gap-4 place-content-center ">

            <div class="title-wrapper py-5 my-5 text-center">
                <h1 class="font-extrabold text-5xl">ざいこ コントロール</h1>
                <h2 class="font-bold text-3xl">商品管理システム</h2>
                <h3 class="font-bold text-3xl">商品の一覧</h3>
            </div>

            <div class="items-form-wrapper">


                <table class="border-collapse border border-gray-600">

                    <thead>
                        <tr>
                            <th class="border boder-gray-500 px-3">商品名</th>
                            <th class="border boder-gray-500 px-3">数量</th>
                            <th class="border boder-gray-500 px-3">単位</th>
                            <th class="border boder-gray-500 px-3">購入日</th>
                            <th class="border boder-gray-500 px-3">価格</th>
                            <th class="border boder-gray-500 px-3">カテゴリ</th>
                        </tr>
                    </thead>

                    @foreach ($items as $item)
                        <tbody>
                            <tr>
                                <td  class="border boder-gray-500 px-3">{{ $item->name_ja }}</td>
                                <td  class="border boder-gray-500 px-3">{{ $item->quantity }}</td>
                                <td  class="border boder-gray-500 px-3">{{ $item->unit_of_measure }}</td>
                                <td  class="border boder-gray-500 px-3">{{ $item->buy_date }}</td>
                                <td  class="border boder-gray-500 px-3">{{ $item->price }}</td>
                                <td  class="border boder-gray-500 px-3">{{ $item->category_id }}</td>
                            </tr>
                        </tbody>
                    @endforeach

                </table>

            </div>
        </div>

@endsection
