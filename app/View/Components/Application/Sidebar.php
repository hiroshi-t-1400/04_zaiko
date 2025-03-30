<?php

namespace App\View\Components\Application;

use App\Models\NavigationLink;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Collection;

class Sidebar extends Component
{

    public $navigationLinks;


    /**
     * Create a new component instance.
     */
    public function __construct()
    {

        $this->navigationLinks = NavigationLink::orderby('order')->get();

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // return view('components.application.sidebar', compact('links'));
        return view('components.application.sidebar');
    }
}
