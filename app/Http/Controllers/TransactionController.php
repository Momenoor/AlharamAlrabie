<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Product;
use App\Models\Sales;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $mode = request()->get('mode') ?? '';
        $view = $mode . '.';
        if ($mode == 'sales') {
            $items = Product::where('type', 'product')->get();
        } else if ($mode == 'expense') {
            $items = Product::where('type', 'expense')->get();
        } else {
            $items = Product::all();
        }

        $accounts = Account::all();

        return view('transactions.' . $view . 'create', compact('items', 'accounts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sales $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sales $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sales $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sales $transaction)
    {
        //
    }
}
