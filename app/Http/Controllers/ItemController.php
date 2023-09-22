<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('themeOne::items.index', compact('items'));
    }

    public function create()
    {
        return view ('themeOne::items.create');
    }
}
