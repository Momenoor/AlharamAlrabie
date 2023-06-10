<?php

namespace App\Http\Controllers;

use App\Imports\ChartImport;
use App\Models\Chart;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application as ApplicationContract;
use Maatwebsite\Excel\Facades\Excel;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View|Application|Factory|ApplicationContract
    {
        $accounts = Chart::all();
        return view('chart.index', compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('chart.create');
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
    public function show(Chart $chart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chart $chart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chart $chart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Chart $chart)
    {
        //
    }

    public function importForm(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('chart.import-form');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx|max:2048'
        ]);

        if (!$request->file) {
            return redirect()->back()->With('message', 'Selected Files is not compatitable.')->with('type', 'danger');
        }

        Excel::import(new ChartImport, $request->file);
        return redirect()->back()->With('message', 'Data imported successfully.')->with('type', 'success');
    }
}
