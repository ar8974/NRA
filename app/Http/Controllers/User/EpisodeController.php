<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\NraEpisode;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function show(NraEpisode $episode)
    {
        return view('user.episodes.show', compact('episode'));
    }
}
