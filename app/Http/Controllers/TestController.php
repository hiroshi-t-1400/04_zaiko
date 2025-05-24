<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class TestController extends Controller
{
    //
    private $item = Item::class;

    public function run()
    {
        $items = Item::with('category')->get();
        return view('items.test', compact('items'));
    }
}
