<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NraCountry;
use Illuminate\Http\Request;

class NraCountryController extends Controller
{
    public function index()
    {
        $items = NraCountry::paginate(10);

        return view('admin.countries.index', compact('items'));
    }

    public function create()
    {
        return view('admin.countries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Country_Code' => 'required|string|max:5|unique:nra_country,Country_Code',
            'Country' => 'required|string|max:50',
        ]);

        NraCountry::create($request->all());
        return redirect()->route('admin.countries.index')->with('success', 'Country added.');
    }

    public function edit($id)
    {
        $country = NraCountry::findOrFail($id);
        return view('admin.countries.edit', compact('country'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Country' => 'required|string|max:50',
        ]);

        $country = NraCountry::findOrFail($id);
        $country->update($request->all());

        return redirect()->route('admin.countries.index')->with('success', 'Country updated.');
    }

    public function destroy($id)
    {
        $country = NraCountry::findOrFail($id);
        $country->delete();

        return redirect()->route('admin.countries.index')->with('success', 'Country deleted.');
    }
}
