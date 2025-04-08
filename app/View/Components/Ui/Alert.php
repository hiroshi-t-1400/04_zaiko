<?php

namespace App\View\Components\Ui;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public $message;
    public $type;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $type = 'info',
        $message = 'message',
    )
    {
        //
        $this->type = $type;
        $this->message = $message;
    }

    public function addClass(): string
    {
        $type = $this->type;

        $classes = match ($type) {
            'success' => 'bg-green-100 border-green-400 text-green-700',
            'warning' => 'bg-yellow-100 border-yellow-400 text-yellow-700',
            'danger' => 'bg-red-100 border-red-400 text-red-700',
            default => 'bg-blue-100 border-blue-400 text-blue-700',
        };

        return $classes;
    }





    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.ui.alert');
    }
}
