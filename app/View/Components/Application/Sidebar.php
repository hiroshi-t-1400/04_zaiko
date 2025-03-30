<?php

namespace App\View\Components\Application;

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

        // // $LinksArray = collect([
        // $LinksArray = collect([
        //     [
        //         'label' => '商品一覧',
        //         'route_name' => 'items.index',
        //         'order' => '1',
        //     ],
        //     [
        //         'label' => '商品登録画面',
        //         'route_name' => 'items.create',
        //         'order' => '2',
        //     ],
        //     // [
        //     //     'label' => 'ユーザー一覧画面',
        //     //     'route_name' => 'users.index',
        //     //     'order' => '3',
        //     // ],
        //     // [
        //     //     'label' => 'ユーザー登録画面',
        //     //     'route_name' => 'users.create',
        //     //     'order' => '4',
        //     // ],
        // ]);

        // $this->navigationLinks = $LinksArray->all();

        // foreach($this->navigationLinks as $link) {
        //     var_dump($link);
        //     dd($link);
        // }
        // dd($this->navigationLinks);


        // ]);

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
