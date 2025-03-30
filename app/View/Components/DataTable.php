<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class DataTable extends Component
{
    public $tableHeaders;
    public $items;

    /**
     * Create a new component instance.
     */
    public function __construct(
        array $tableHeaders,
        $items
        )
    {
        // このタイプ次第で、何のテーブルを呼び出すのか
        $this->tableHeaders = $tableHeaders;
        $this->items = $items;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.data-table');
    }
}
