<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NraContract;
use App\Models\NraWebseries;

class NraContractController extends Controller
{
    public function index()
    {
        $contracts = NraContract::with('webseries')->paginate(10);
        return view('admin.contracts.index', compact('contracts'));
    }

    public function create()
    {
        $webseries = NraWebseries::all();
        return view('admin.contracts.create', compact('webseries'));
    }

public function store(Request $request)
{
    $data = $request->validate([
        'Series_ID' => 'required|integer|exists:nra_webseries,Series_ID',
        'Contract_date' => 'required|date',
        'Contract_end' => 'required|date|after_or_equal:Contract_date',
        'Charge_per_ep' => 'required|numeric',
    ]);

    $nextId = NraContract::max('Contract_ID');
    $data['Contract_ID'] = $nextId ? $nextId + 1 : 1;

    NraContract::create($data);

    return redirect()->route('admin.contracts.index')->with('success', 'Contract created.');
}


    public function show(NraContract $contract)
    {
        return view('admin.contracts.show', compact('contract'));
    }

    public function edit(NraContract $contract)
    {
        $webseries = NraWebseries::all();
        return view('admin.contracts.edit', compact('contract', 'webseries'));
    }

    public function update(Request $request, NraContract $contract)
    {
        $data = $request->validate([
            'Series_ID' => 'required|integer|exists:nra_webseries,Series_ID',
            'Contract_date' => 'required|date',
            'Contract_end' => 'required|date|after_or_equal:Contract_date',
            'Charge_per_ep' => 'required|numeric',
        ]);

        $contract->update($data);

        return redirect()->route('admin.contracts.index')
                        ->with('success', 'Contract updated.');
    }

    public function destroy(NraContract $contract)
    {
        $contract->delete();
        return redirect()->route('admin.contracts.index')->with('success', 'Contract deleted.');
    }
}
