<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NraSub;

class NraSubController extends Controller
{
    public function index()
    {
        $subs = NraSub::paginate(10); // pagination
        return view('admin.subs.index', compact('subs'));
    }

    public function create()
    {
        return view('admin.subs.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'Language' => 'required|string|max:30',
            'Series_ID' => 'required|integer|exists:nra_webseries,Series_ID',
        ]);

        NraSub::create($request->all());

        return redirect()->route('admin.subs.index')
                         ->with('success', 'Sub added successfully.');
    }

    public function show(NraSub $sub)
    {
        return view('admin.subs.show', compact('sub'));
    }


    public function edit(NraSub $sub)
    {
        return view('admin.subs.edit', compact('sub'));
    }


    public function update(Request $request, NraSub $sub)
    {
        $request->validate([
            'Language' => 'required|string|max:30',
            'Series_ID' => 'required|integer|exists:nra_webseries,Series_ID',
        ]);

        $sub->update($request->all());

        return redirect()->route('admin.subs.index')
                         ->with('success', 'Sub updated successfully.');
    }

    public function destroy(NraSub $sub)
    {
        $sub->delete();

        return redirect()->route('admin.subs.index')
                         ->with('success', 'Sub deleted successfully.');
    }
}
