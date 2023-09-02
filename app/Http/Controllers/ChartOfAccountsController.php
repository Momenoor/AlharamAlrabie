<?php

namespace App\Http\Controllers;

use App\Models\ChartOfAccounts;
use Illuminate\Http\Request;

class ChartOfAccountsController extends Controller
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
        $categories = config('defaults.chart_of_accounts.categories');
        $parents = ChartOfAccounts::all();
        return view('chart_of_accounts.create',compact('categories','parents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'unique:chart_of_accounts,name|required|string|min:3|max:255',
            'code' => 'unique:chart_of_accounts,code|required|min:6|max:15',
            'parent_id' => 'nullable|exists:chart_of_accounts,id',
            'description' => 'nullable|string|min:3|max:255',
        ]);
        ChartOfAccounts::create($request->validated());

        return redirect()->route('chartofaccounts.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(ChartOfAccounts $chartOfAccounts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChartOfAccounts $chartOfAccounts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ChartOfAccounts $chartOfAccounts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ChartOfAccounts $chartOfAccounts)
    {
        //
    }
}
