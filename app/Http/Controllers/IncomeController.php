<?php

namespace App\Http\Controllers;

use App\Imports\SalesImport;
use App\Models\Income;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class IncomeController extends Controller
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
    public function show(Income $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Income $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Income $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Income $transaction)
    {
        //
    }


    public function importForm(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('sales.import-form');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,csv|max:2048'
        ]);

        if (!$request->file) {
            return redirect()->back()->With('message', 'Selected Files is not compatitable.')->with('type', 'danger');
        }

        Excel::import(new SalesImport, $request->file);
        return redirect()->back()->With('message', 'Data imported successfully.')->with('type', 'success');
    }
}
