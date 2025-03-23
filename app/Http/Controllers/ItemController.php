<?php

namespace App\Http\Controllers;

use App\Service\ItemService;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function create(Request $request)
    {
        return view('index');
    }

}
