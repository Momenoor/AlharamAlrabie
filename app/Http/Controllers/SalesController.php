<?php

namespace App\Http\Controllers;

use App\Imports\SalesImport;
use App\Models\Sales;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class SalesController extends Controller
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
        //
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


    public function importForm(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('sales.import-form');
    }

    public function import(Request $request): \Maatwebsite\Excel\Excel|bool
    {
        $request->validate([
            'file' => 'required|mimes:xlsx|max:2048'
        ]);

        if (!$request->file) {
            return false;
        }
        return Excel::import(new SalesImport, $request->file);

    }
}
