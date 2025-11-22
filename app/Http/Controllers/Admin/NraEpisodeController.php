<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NraEpisode;
use App\Models\NraWebseries;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class NraEpisodeController extends Controller
{
    public function index()
    {
        $episodes = NraEpisode::with('webseries')->paginate(10);
        return view('admin.episodes.index', compact('episodes'));
    }

    public function create()
    {
        $webseries = NraWebseries::all();
        return view('admin.episodes.create', compact('webseries'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'Series_ID'    => 'required|integer|exists:nra_webseries,Series_ID',
            'Title'        => 'required|string|max:255',
            'Ep_No'        => [
                'required',
                'integer',
                Rule::unique('nra_episode')->where(function ($query) use ($request) {
                    return $query->where('Series_ID', $request->Series_ID);
                }),
            ],
        ]);

        $data['Ep_ID'] = NraEpisode::max('Ep_ID') + 1;

        NraEpisode::create($data);

        return redirect()->route('admin.episodes.index')->with('success', 'Episode created.');
    }

    public function show(NraEpisode $episode)
    {
        return view('admin.episodes.show', compact('episode'));
    }

    public function edit(NraEpisode $episode)
    {
        $webseries = NraWebseries::all();
        return view('admin.episodes.edit', compact('episode', 'webseries'));
    }

    public function update(Request $request, NraEpisode $episode)
    {
        $data = $request->validate([
            'Series_ID' => 'required|integer|exists:nra_webseries,Series_ID',
            'Title'     => 'required|string|max:255',
            'Ep_No'     => [
                'required',
                'integer',
                Rule::unique('nra_episode')->where(function ($query) use ($request, $episode) {
                    return $query->where('Series_ID', $request->Series_ID)
                                ->where('Ep_ID', '!=', $episode->Ep_ID);
                }),
            ],
        ]);

        $episode->update($data);

        return redirect()->route('admin.episodes.index')
                        ->with('success', 'Episode updated.');
    }

    public function destroy(NraEpisode $episode)
    {
        $episode->delete();

        return redirect()->route('admin.episodes.index')
                         ->with('success', 'Episode deleted.');
    }
}
