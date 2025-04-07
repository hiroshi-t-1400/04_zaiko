<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;



class DataTable extends Component
{
    public $tableHeaders;
    public $items;
    public $options;

    /**
     * Create a new component instance.
     */
    public function __construct(
        array $tableHeaders,
        array|Collection $items,
        array $options
        )
    {
        $this->tableHeaders = $tableHeaders;
        $this->items = $items;
        $this->options = $options;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.data-table');
    }
}
