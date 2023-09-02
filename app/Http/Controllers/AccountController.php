<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parentAccounts = Account::whereNull('parent_id')->with('children')->get();
        $accounts = $this->prepareHierarchicalData($parentAccounts);
        return view('accounts.index', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $accounts = Account::all();
        return view('accounts.create', compact('accounts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'parent_id' => ['nullable', 'integer', 'exists:accounts,id'],
        ]);
        $account = Account::create($validation);
        return redirect()->route('accounts.index')->with('success', 'Account [' . $account->name . '] created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account)
    {
        //
    }

    private function prepareHierarchicalData($accounts, $level = 0)
    {
        $data = [];

        foreach ($accounts as $account) {
            $indentation = str_repeat(' ', $level * 2);
            $data[] = ['id' => $account->id, 'indentation' => $indentation . '-', 'name' => $account->name];

            if ($account->children->isNotEmpty()) {
                $data = array_merge($data, $this->prepareHierarchicalData($account->children, $level + 1));
            }
        }

        return $data;
    }
}
