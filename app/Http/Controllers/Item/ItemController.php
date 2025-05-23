<?php

namespace App\Http\Controllers\Item;

use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Services\Contracts\ItemServiceInterface;
use App\Services\Contracts\TableDisplayServiceInterface;
use App\Services\Contracts\FormDisplayServiceInterface;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class ItemController extends Controller
{

    public function __construct(
        private readonly ItemServiceInterface $itemService,
        private readonly TableDisplayServiceInterface $tableDisplayService,
        private readonly FormDisplayServiceInterface $formDisplayService,
    ) {}

    /**
     * 商品一覧画面の表示
     *
     * @return Response
     */
    public function index(): Response
    {
        $items = $this->itemService->getAll();
        $tableHeaders = $this->tableDisplayService
            ->setHeaders([
                'id',
                'name_ja',
                'quantity',
                'unit_of_measure',
                'buy_date',
                'price',
                'category_id'
            ], 'items')
            ->getHeaders();
        $items = $this->tableDisplayService
            ->setData($items)
            ->getData();

        $options = [
            'edit' =>
                $this->tableDisplayService
                    ->addAction('button', '編集', 'items.edit', [
                        'method' => 'GET',
                        'attributes' => [
                            'class' => [
                                'bg-blue-700',
                                'hover:bg-blue-600',
                                'text-white',
                                'rounded',
                                'px-2',
                                'py-1',
                            ],
                        ],
                    ]),
            'delete' =>
                $this->tableDisplayService
                    ->addAction('button', '削除', 'items.destroy', [
                        'method' => 'DELETE',
                        'attributes' => [
                            'class' => [
                                'bg-gray-700',
                                'hover:bg-gray-600',
                                'text-white',
                                'rounded',
                                'px-2',
                                'py-1'
                            ],
                        ],
                        'confirm' => '削除してよろしいですか？',
                    ]),
        ];

        return response()->view('items.index', compact('items', 'tableHeaders', 'options'));
    }

    /**
     * １件の商品を取得してビューに返す
     *
     * @param [type] $id
     * @return Response
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
     * @return Response
     */
    public function create(): Response
    {
        $viewForms = [
            'name_ja',
            'name_en',
            'quantity',
            'unit_of_measure',
            'category_id',
            'price',
            'buy_date',
            'reorder_point',
            'safety_stock',
            'description_ja',
        ];

        $displayInfo = $this->formDisplayService->setDisplayInfo($viewForms, 'items');

        $submitAction = [
                'store' => [
                    'label' => '保存',
                    'url' => route('items.store'),
                ],
                'cancel' => [
                    'label' => 'キャンセル',
                    'url' => route('items.index'),
                ],
                // 'method' => 'POST',
        ];

        return response()->view('items.create', compact('displayInfo', 'submitAction'));
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
        return redirect()->route('items.index')
                    ->with('success', '商品登録に成功しました');
    }

    /**
     * 商品情報の変更画面の表示
     *
     * @param string $id
     * @return Response
     */
    public function edit($id): Response
    {
        $viewForms = [
            'name_ja',
            'name_en',
            'quantity',
            'unit_of_measure',
            'category_id',
            'price',
            'buy_date',
            'reorder_point',
            'safety_stock',
            'description_ja',
        ];

        $displayInfo = $this->formDisplayService->setDisplayInfo($viewForms, 'items');

        $submitAction = [
                'store' => [
                    'label' => '変更を保存',
                    'url' => route('items.update', $id),
                ],
                'cancel' => [
                    'label' => 'キャンセル',
                    'url' => route('items.index'),
                ],
                'method' => 'PUT',
        ];
        // データベースから編集するレコードを取得
        $item = $this->itemService->getById($id);
        return response()->view('/items.edit', compact('displayInfo', 'submitAction', 'item'));
    }

    /**
     * 商品の変更内容を保存
     *
     * @param UpdateItemRequest $request
     * @param string $id 更新するアイテムのID(ルートパラメータから)
     * @return RedirectResponse
     */
    public function update(UpdateItemRequest $request, $id): RedirectResponse
    {
        $validatedData = $request->validated();
        $id = intval($id);

        // modifyサービスを呼び出してupdateを試みる
        $affectiveRows = $this->itemService->modify($id, $validatedData);

        if ( $affectiveRows > 0 ) {
            // 成功したとき
            return redirect()->route('items.index')
                        ->with('success', '商品情報を変更しました。');
        } elseif ( $affectiveRows === 0 ) {
            // 失敗したとき
            return redirect()->route('items.edit', $id)
                        ->with('warning', '商品情報に変更はありませんでした。');
        } else {
            // 失敗したとき 例外処理
            return redirect()->route('items.edit', $id)
                        ->with('error', '商品情報の変更に失敗しました。');
        }
    }

    /**
     * 商品１件の削除
     *
     * @param [type] $id
     * @return response
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $this->itemService->remove($id);

        return redirect()->route('items.index')
                    ->with('success', '１件の商品を削除しました。');
    }

}
