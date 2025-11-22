<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ShowController extends Controller
{
    public function index()
    {
        $shows = DB::table('nra_webseries')
            ->select('Series_ID', 'Name', 'Release', 'House_ID', 'Country')
            ->paginate(12);

        $shows->getCollection()->transform(function($show) {
            $show->total_episodes = DB::table('nra_episode')
                ->where('Series_ID', $show->Series_ID)
                ->count();
            return $show;
        });

        return view('user.shows.index', compact('shows'));
    }

    public function show($series_id)
    {
        $show = DB::table('nra_webseries')
            ->where('Series_ID', $series_id)
            ->first();

        if (!$show) {
            abort(404, 'Show not found.');
        }

        $episodes = DB::table('nra_episode')
            ->where('Series_ID', $series_id)
            ->orderBy('Ep_No')
            ->get();

        return view('user.shows.show', compact('show', 'episodes'));
    }
}
