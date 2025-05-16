<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    private $displayInfo;
    private $submitAction;
    private $selected;
    private $cancelAction;



    /**
     * Create a new component instance.
     */
    public function __construct(
        array $displayInfo,
        array $submitAction,
        $selected,
        array $cancelAction = ['url' => '#', 'label' => 'キャンセル', 'class' => ''],
        array $item)
    {
        $this->displayInfo = $displayInfo;
        $this->submitAction = $submitAction;
        $this->selected = $selected;
        $this->cancelAction = $cancelAction;
        $this->item = $item;
    }

    public function isSelected(string $option): bool
    {
        return $option === $this->selected;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.input');
    }
}
