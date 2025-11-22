<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NraProdhouse;
use Illuminate\Http\Request;
use App\Models\NraCountry;

class NraProdhouseController extends Controller
{
    public function index()
    {
        $prodhouses = NraProdhouse::paginate(10);
        return view('admin.prodhouses.index', compact('prodhouses'));
    }

    public function create()
    {
        $countries = NraCountry::all();
        return view('admin.prodhouses.create', compact('countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Name' => 'required|string|max:255',
            'Street' => 'nullable|string|max:255',
            'City' => 'nullable|string|max:255',
            'ZIP' => 'nullable|string|max:10',
            'Year_Est' => 'nullable|integer',
            'Country_Code' => 'required|string|size:2',
        ]);

        $nextId = NraProdhouse::max('House_ID') ? NraProdhouse::max('House_ID') + 1 : 1;

        NraProdhouse::create(array_merge($request->all(), ['House_ID' => $nextId]));

        return redirect()->route('admin.prodhouses.index')->with('success', 'Production House added successfully.');
    }

    public function edit(NraProdhouse $prodhouse)
    {
        $countries = NraCountry::all();
        return view('admin.prodhouses.edit', compact('prodhouse', 'countries'));
    }

    public function update(Request $request, NraProdhouse $prodhouse)
    {
        $request->validate([
            'Name' => 'required|string|max:255',
            'Street' => 'nullable|string|max:255',
            'City' => 'nullable|string|max:255',
            'ZIP' => 'nullable|string|max:10',
            'Year_Est' => 'nullable|integer',
            'Country_Code' => 'nullable|string|size:2',
        ]);

        $prodhouse->update($request->all());

        return redirect()->route('admin.prodhouses.index')->with('success', 'Production House updated successfully.');
    }

    public function show(NraProdhouse $prodhouse)
    {
        return view('admin.prodhouses.show', compact('prodhouse'));
    }

    public function destroy(NraProdhouse $prodhouse)
    {
        $prodhouse->delete();
        return redirect()->route('admin.prodhouses.index')->with('success', 'Production House deleted successfully.');
    }
}
