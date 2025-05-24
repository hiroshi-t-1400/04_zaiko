<div class="side-container grid grid-cols-1 gap-2">

    <h5 class="italic font-bold text-center text-2xl py-2 my-2">サイドバー</h5>

    <div class="user-show-wrapper font-semibold text-center">
        <div>ユーザー名</div>
        <a href="" class="font-bold">テック太郎</a>
    </div>

    @foreach ($navigationLinks as $link)
        <div class="nav-wrapper grid gap-2">
            <a href="{{ route($link->route_name) }}">{{ $link->label }}</a>
        </div>
    @endforeach

    <div class="nav-wrappper grid gap-2">
        <a href="{{ route('items.index') }}">商品一覧</a>
    </div>

    <div class="nav-wrappper grid gap-2">
        <a href="{{ route('items.create') }}">商品登録画面</a>
    </div>

    <div class="nav-wrappper grid gap-2">
        <a href="{{ route('home') }}">ホーム画面</a>
    </div>

</div>
