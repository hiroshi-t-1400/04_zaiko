@extends('layouts.app')

@section('content')

        <div class="main-container grid grid-cols-[minmax(min-content,_800px)] gap-4 place-content-center ">

            <div class="title-wrapper py-5 my-5 text-center">
                <h1 class="font-extrabold text-5xl">ざいこ コントロール</h1>
                <h2 class="font-bold text-3xl">商品管理システム</h2>
            </div>

            <div class="items-form-wrapper">

                <form action="" method="POST" class="">
                    <div class="items-form-inner grid grid-cols-1 gap-1 mx-10">
                        @csrf

                        <label for="items-name" class="font-semibold text-xl">商品名</label>
                        <div class="">

                            <input type="text" name="items_name" id="items-name" class="rounded-xl outline-2 outline-gray-600 py-2 px-4 m-0.5 mb-4 text-xl w-8/10"  autofocus>
                        </div>

                        <label for="buy-date" class="font-semibold text-xl">購入日</label>
                        <div class="">
                            <input type="date" name="buy_date" id="buy-date" class="rounded-xl outline-2 outline-gray-600 py-2 px-4 m-0.5 mb-4 text-xl w-8/10"  value="{{ date('Y-m-d') }}">
                        </div>

                        <label for="category-id" class="font-semibold text-xl">カテゴリ</label>
                        <select name="category_id" id="category-id" class="font-semibold text-xl rounded-xl outline-2 outline-gray-600 py-2 px-4 m-0.5 mb-4 w-8/10" value="">
                            <option value=""></option>
                            <option value="1">食品</option>
                            <option value="2">日用品</option>
                            <option value="3">家電</option>
                            <option value="4">その他</option>
                        </select>


                        <label for="price" class="font-semibold text-xl">購入価格</label>
                        <input type="text" name="price" id="price"  class="rounded-xl outline-2 outline-gray-600 py-2 px-4 m-0.5 mb-4 text-xl w-8/10" >

                        <label for="detail" class="font-semibold text-xl">商品詳細</label>
                        <input type="text" name="detail" id="detail"  class="rounded-xl outline-2 outline-gray-600 py-2 px-4 m-0.5 mb-4 text-xl w-8/10" >

                        <button type="submit" class="btn rounded-xl  w-30 h-10 ms-30 ring-2 ring-blue-500 bg-blue-600 font-extrabold text-gray-200 text-3xl" >登録</button>

                    </div>

                </form>
            </div>

</div>


    </div>

@endsection
