<?php

namespace App\Http\Controllers\Item;

use App\Http\Requests\StoreItemRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Services\Contracts\ItemServiceInterface;

class ItemController extends Controller
{

    public function __construct(
        private readonly ItemServiceInterface $itemService
    ) {}

    /**
     * 商品一覧画面の表示
     *
     * @return void
     */
    public function index(): Response
    {
        $items = $this->itemService->getAll();

        return response()->view('items.index', compact('items'));
    }

    /**
     * 商品登録画面の表示
     *
     * @return void
     */
    public function create(): Response
    {
        return response()->view('items.create');
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


    public function show(Request $request)
    {
        return redirect()->route('items.show');
    }

    // public function edit()
    // {
    //     return redirect()->route('items.edit');
    // }

    // public function update(UpdateItemRequest $request)
    // {
    //     return redirect('items.index');
    // }

    // public function destroy($id)
    // {
    //     return redirect('items.index');
    // }

}
