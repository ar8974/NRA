<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $genres = DB::table('nra_webseries')
            ->select('Country as Genre')
            ->distinct()
            ->pluck('Genre');

        return view('user.countries.index', compact('genres'));
    }

    public function show($genre)
    {
        $shows = DB::table('nra_webseries')
            ->where('Country', $genre)
            ->select('Series_ID', 'Name', 'Release', 'House_ID', 'Country')
            ->paginate(12);

        return view('user.countries.show', compact('genre', 'shows'));
    }
}
