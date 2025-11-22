<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NraGenre;
use Illuminate\Http\Request;

class NraGenreController extends Controller
{
    public function index()
    {
        $genres = NraGenre::paginate(10);
        return view('admin.genres.index', compact('genres'));
    }

    public function create()
    {
        return view('admin.genres.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Genre_ID' => 'required|integer|unique:nra_genre,Genre_ID',
            'Name' => 'required|string|max:255',
        ]);

        NraGenre::create($request->all());

        return redirect()->route('admin.genres.index')
            ->with('success', 'Genre created successfully.');
    }

    public function show(NraGenre $genre)
    {
        return view('admin.genres.show', compact('genre'));
    }

    public function edit(NraGenre $genre)
    {
        return view('admin.genres.edit', compact('genre'));
    }

    public function update(Request $request, NraGenre $genre)
    {
        $request->validate([
            'Name' => 'required|string|max:255',
        ]);

        $genre->update([
            'Name' => $request->Name
        ]);

        return redirect()->route('admin.genres.index')
            ->with('success', 'Genre updated successfully.');
    }

    public function destroy(NraGenre $genre)
    {
        $genre->delete();

        return redirect()->route('admin.genres.index')
            ->with('success', 'Genre deleted successfully.');
    }
}
