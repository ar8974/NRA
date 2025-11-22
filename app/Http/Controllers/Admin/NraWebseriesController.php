<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NraWebseries;
use App\Models\NraProdhouse;
use App\Models\NraCountry;
use App\Models\NraGenre;

class NraWebseriesController extends Controller
{
    public function index()
    {
        $webseries = NraWebseries::with(['prodhouse', 'genres'])->paginate(10);
        return view('admin.webseries.index', compact('webseries'));
    }

    public function create()
    {
        $houses = NraProdhouse::all();
        $countries = NraCountry::all();
        $genres = NraGenre::all();
        return view('admin.webseries.create', compact('houses', 'countries', 'genres'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'Name' => 'required|string|max:255',
            'Release' => 'required|date',
            'House_ID' => 'required|integer|exists:nra_prodhouse,House_ID',
            'Country' => 'required|string|max:30',
            'genres' => 'nullable|array',
            'genres.*' => 'integer|exists:nra_genre,Genre_ID',
        ]);

        $nextId = NraWebseries::max('Series_ID') + 1;

        $webseries = NraWebseries::create([
            'Series_ID' => $nextId,
            'Name' => $data['Name'],
            'Release' => $data['Release'],
            'House_ID' => $data['House_ID'],
            'Country' => $data['Country']
        ]);

        if (!empty($data['genres'])) {
            $webseries->genres()->sync($data['genres']);
        }

        return redirect()->route('admin.webseries.index')
                        ->with('success', 'Webseries created.');
    }

    public function show(NraWebseries $webseries)
    {
        $webseries->load(['prodhouse','genres']);
        return view('admin.webseries.show', compact('webseries'));
    }

    public function edit(NraWebseries $webseries)
    {
        $houses = NraProdhouse::all();
        $countries = NraCountry::all();
        $genres = NraGenre::all();
        $selectedGenres = $webseries->genres->pluck('Genre_ID')->toArray();

        return view('admin.webseries.edit', compact('webseries', 'houses', 'countries', 'genres', 'selectedGenres'));
    }

    public function update(Request $request, NraWebseries $webseries)
    {
        $data = $request->validate([
            'Name' => 'required|string|max:255',
            'Release' => 'required|date',
            'House_ID' => 'required|integer|exists:nra_prodhouse,House_ID',
            'Country' => 'required|string|max:30',
            'genres' => 'nullable|array',
            'genres.*' => 'integer|exists:nra_genre,Genre_ID',
        ]);

        $webseries->update($request->only(['Name','Release','House_ID','Country']));

        $webseries->genres()->sync($data['genres'] ?? []);

        return redirect()->route('admin.webseries.index')->with('success', 'Webseries updated.');
    }

    public function destroy(NraWebseries $webseries)
    {
        $webseries->genres()->detach();
        $webseries->delete();
        return redirect()->route('admin.webseries.index')->with('success', 'Webseries deleted.');
    }
}
