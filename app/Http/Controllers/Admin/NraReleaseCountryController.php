<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NraReleaseCountry;
use App\Models\NraWebseries;
use App\Models\NraCountry;

class NraReleaseCountryController extends Controller
{
    public function index()
    {
        $releaseCountries = NraReleaseCountry::with(['webseries', 'country'])->paginate(10);
        return view('admin.releaseCountries.index', compact('releaseCountries'));
    }

    public function create()
    {
        $webseries = NraWebseries::all();
        $countries = NraCountry::all();
        return view('admin.releaseCountries.create', compact('webseries', 'countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Series_ID' => 'required|exists:nra_webseries,Series_ID',
            'Country_Code' => 'required|exists:nra_country,Country_Code',
            'Release_Date' => 'required|date',
        ]);

        NraReleaseCountry::create($request->only('Series_ID','Country_Code','Release_Date'));

        return redirect()->route('admin.releaseCountries.index')
            ->with('success', 'Release country added successfully.');
    }

    public function edit(NraReleaseCountry $releaseCountry)
    {
        $webseries = NraWebseries::all();
        $countries = NraCountry::all();
        return view('admin.releaseCountries.edit', compact('releaseCountry', 'webseries', 'countries'));
    }

    public function update(Request $request, NraReleaseCountry $releaseCountry)
    {
        $request->validate([
            'Series_ID' => 'required|exists:nra_webseries,Series_ID',
            'Country_Code' => 'required|exists:nra_country,Country_Code',
            'Release_Date' => 'required|date',
        ]);

        $releaseCountry->update($request->only('Series_ID','Country_Code','Release_Date'));

        return redirect()->route('admin.releaseCountries.index')
            ->with('success', 'Release country updated successfully.');
    }

    public function destroy(NraReleaseCountry $releaseCountry)
    {
        $releaseCountry->delete();
        return redirect()->route('admin.releaseCountries.index')
            ->with('success', 'Release country deleted successfully.');
    }
}
