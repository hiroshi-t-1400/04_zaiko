<?php

namespace App\Http\Controllers\Item;

use App\Http\Requests\StoreItemRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Services\Contracts\ItemServiceInterface;
use App\Services\Contracts\TableDisplayServiceInterface;

class ItemController extends Controller
{

    public function __construct(
        private readonly ItemServiceInterface $itemService,
        private readonly TableDisplayServiceInterface $tableDisplayService
    ) {}

    /**
     * 商品一覧画面の表示
     *
     * @return void
     */
    public function index(): Response
    {
        $items = $this->itemService->getAll();

        $this->tableDisplayService->setHeaders(['name_ja', 'quantity', 'unit_of_measure', 'buy_date', 'price', 'category_id',], 'items');
        $tableHeaders = $this->tableDisplayService->getHeaders();

        return response()->view('items.index', compact('tableHeaders', 'items'));
    }

    /**
     * １件の商品を取得してビューに返す
     *
     * @param $id
     * @return void
     */
    public function show($id): Response
    {
        $items = $this->itemService->getById($id);
        //エラーnull

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
        // dd($request);

        $this->itemService->store($request->validated());
        return redirect()->route('items.index');
    }

    /**
     * 商品情報の変更画面の表示
     *
     * @param $request->edit_id
     * @return void
     */
    public function edit(Request $request): Response
    {
        $item = $this->itemService->getById($request->edit_id);
        return response()->view('/items.edit', compact('item'));
    }

    /**
     * 商品の変更内容を保存
     *
     * @param UpdateItemRequest $request
     * @return $errors|Response
     */
    public function update(UpdateItemRequest $request)
    {
        $this->itemService->modify($request->validated());
        // 失敗or成功 バリデーションエラー、モデルの拒否など


        // 成功したとき
        return response()->redirect('items.index')
                    ->with('success', '商品情報を変更しました。');
    }

    /**
     * 商品１件の削除
     *
     * @param [type] $id
     * @return response
     */
    public function destroy($id)
    {
        $this->itemService->remove($id);


        return response()->redirect('items.index')
                    ->with('success', '商品情報を削除しました。');
    }

}
