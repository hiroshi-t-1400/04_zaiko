<?php

namespace App\Http\Controllers\Item;

use App\Http\Requests\StoreItemRequest;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{

    public function __construct(
        private readonly ItemServiceInterface $itemService
    ) {}

    /**
     * 商品登録画面の表示
     *
     * @return void
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * 商品の登録
     *
     * @param StoreItemRequest $request
     * @return void
     */
    public function store(StoreItemRequest $request)
    {
        $this->itemService->store($request->validated());
        // return redirect()->route('item.index');
        return redirect('home');
    }

}
