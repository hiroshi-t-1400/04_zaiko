@extends('layouts.app')

@section('content')

        <div class="main-container grid grid-cols-[minmax(min-content,_800px)] gap-4 place-content-center ">

            <div class="title-wrapper py-5 my-5 text-center">
                <h1 class="font-extrabold text-5xl">ざいこ コントロール</h1>
                <h2 class="font-bold text-3xl">商品管理システム</h2>
                <h3 class="font-bold text-3xl">商品の登録</h3>

            </div>

            <div class="items-form-wrapper">

                <form action="{{ route('items.store') }}" method="POST" class="">
                    <div class="items-form-inner grid grid-cols-2 gap-5 [&_input]:w-90">
                        @csrf

                        <div class="">
                            <label for="name_ja" class="font-semibold text-xl">商品名</label>
                            <input type="text" name="name_ja" id="name_ja" class="rounded-xl outline-2 outline-gray-600 py-2 px-4 m-0.5 mb-4 text-xl "  autofocus>
                        </div>

                        <div class="">
                            <label for="name_en" class="font-semibold text-xl">商品名_英語</label>
                            <input type="text" name="name_en" id="name_en" class="rounded-xl outline-2 outline-gray-600 py-2 px-4 m-0.5 mb-4 text-xl ">
                        </div>

                        <div class="">
                            <label for="quantity" class="font-semibold text-xl">数量</label>
                            <input type="text" name="quantity" id="quantity" class="rounded-xl outline-2 outline-gray-600 py-2 px-4 m-0.5 mb-4 text-xl ">
                        </div>

                        <div class="">
                            <label for="unit_of_measure" class="font-semibold text-xl">単位</label>
                            <input type="text" name="unit_of_measure" id="unit_of_measure" class="rounded-xl outline-2 outline-gray-600 py-2 px-4 m-0.5 mb-4 text-xl ">
                        </div>


                        <div class="">
                            <label for="category_id" class="font-semibold text-xl">カテゴリ</label>
                            <select name="category_id" id="category_id" class="font-semibold text-xl rounded-xl outline-2 outline-gray-600 py-2 px-4 m-0.5 mb-4 " value="">
                                <option value=""></option>
                                <option value="1">食品</option>
                                <option value="2">日用品</option>
                                <option value="3">家電</option>
                                <option value="4">その他</option>
                            </select>
                        </div>

                        <div class="">
                            <label for="price" class="font-semibold text-xl">価格</label>
                            <input type="text" name="price" id="price" class="rounded-xl outline-2 outline-gray-600 py-2 px-4 m-0.5 mb-4 text-xl ">
                        </div>

                        <div class="">
                            <label for="buy_date" class="font-semibold text-xl">購入日</label>
                            <input type="date" name="buy_date" id="buy_date" class="rounded-xl outline-2 outline-gray-600 py-2 px-4 m-0.5 mb-4 text-xl ">
                        </div>

                        <div class="">
                            <label for="reorder_point" class="font-semibold text-xl">買い足し閾値</label>
                            <input type="text" name="reorder_point" id="reorder_point" class="rounded-xl outline-2 outline-gray-600 py-2 px-4 m-0.5 mb-4 text-xl ">
                        </div>

                        <div class="">
                            <label for="safety_stock" class="font-semibold text-xl">最低バッファ</label>
                            <input type="text" name="safety_stock" id="safety_stock" class="rounded-xl outline-2 outline-gray-600 py-2 px-4 m-0.5 mb-4 text-xl ">
                        </div>

                        <div class="">
                            <label for="description_ja" class="font-semibold text-xl">説明</label>
                            <input type="text" name="description_ja" id="description_ja" class="rounded-xl outline-2 outline-gray-600 py-2 px-4 m-0.5 mb-4 text-xl ">
                        </div>

                        <button type="submit" class="btn rounded-xl  w-32 h-10 ms-30 ring-2 ring-blue-500 bg-blue-600 font-extrabold text-gray-200 text-3xl" >登録</button>

                    </div>

                </form>
            </div>

</div>


    </div>

@endsection
