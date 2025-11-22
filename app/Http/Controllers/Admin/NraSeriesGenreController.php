<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NraSeriesGenre;
use App\Models\NraWebseries;
use App\Models\NraGenre;

class NraSeriesGenreController extends Controller
{
    public function index()
    {
        $seriesGenres = NraSeriesGenre::with(['webseries', 'genre'])->paginate(10);
        return view('admin.seriesGenres.index', compact('seriesGenres'));
    }

    public function create()
    {
        $webseries = NraWebseries::all();
        $genres = NraGenre::all();
        return view('admin.seriesGenres.create', compact('webseries', 'genres'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Series_ID' => 'required|exists:nra_webseries,Series_ID',
            'Genre_ID' => 'required|exists:nra_genre,Genre_ID',
        ]);

        NraSeriesGenre::create($request->only('Series_ID','Genre_ID'));

        return redirect()->route('admin.seriesGenres.index')
            ->with('success', 'Series-Genre mapping created successfully.');
    }

    public function edit(NraSeriesGenre $seriesGenre)
    {
        $webseries = NraWebseries::all();
        $genres = NraGenre::all();
        return view('admin.seriesGenres.edit', compact('seriesGenre', 'webseries', 'genres'));
    }

    public function update(Request $request, NraSeriesGenre $seriesGenre)
    {
        $request->validate([
            'Series_ID' => 'required|exists:nra_webseries,Series_ID',
            'Genre_ID' => 'required|exists:nra_genre,Genre_ID',
        ]);

        $seriesGenre->update($request->only('Series_ID','Genre_ID'));

        return redirect()->route('admin.seriesGenres.index')
            ->with('success', 'Series-Genre mapping updated successfully.');
    }

    public function destroy(NraSeriesGenre $seriesGenre)
    {
        $seriesGenre->delete();
        return redirect()->route('admin.seriesGenres.index')
            ->with('success', 'Series-Genre mapping deleted successfully.');
    }
}
