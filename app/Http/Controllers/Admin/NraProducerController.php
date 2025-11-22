<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NraProducer;
use App\Models\NraCountry;
use Illuminate\Http\Request;

class NraProducerController extends Controller
{
    public function index()
    {
        $producers = NraProducer::with('country')->paginate(10);
        return view('admin.producers.index', compact('producers'));
    }

    public function create()
    {
        $countries = NraCountry::all();
        return view('admin.producers.create', compact('countries'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'F_Name' => 'required|string|max:30',
            'L_Name' => 'required|string|max:30',
            'Street' => 'required|string|max:20',
            'City' => 'required|string|max:30',
            'ZIP' => 'required|string|max:10',
            'Phone_code' => 'required|string|max:5',
            'Local_Phone' => 'required|string|max:25',
            'Email' => 'required|email|max:30',
            'Country_Code' => 'required|exists:nra_country,Country_Code',
        ]);

        $data['Prod_ID'] = NraProducer::max('Prod_ID') + 1;
        NraProducer::create($data);

        return redirect()->route('admin.producers.index')->with('success', 'Producer created.');
    }

    public function edit(NraProducer $producer)
    {
        $countries = NraCountry::all();
        return view('admin.producers.edit', compact('producer', 'countries'));
    }

    public function update(Request $request, NraProducer $producer)
    {
        $data = $request->validate([
            'F_Name' => 'required|string|max:30',
            'L_Name' => 'required|string|max:30',
            'Street' => 'required|string|max:20',
            'City' => 'required|string|max:30',
            'ZIP' => 'required|string|max:10',
            'Phone_code' => 'required|string|max:5',
            'Local_Phone' => 'required|string|max:25',
            'Email' => 'required|email|max:30',
            'Country_Code' => 'required|exists:nra_country,Country_Code',
        ]);

        $producer->update($data);

        return redirect()->route('admin.producers.index')->with('success', 'Producer updated.');
    }

    public function destroy(NraProducer $producer)
    {
        $producer->delete();
        return redirect()->route('admin.producers.index')->with('success', 'Producer deleted.');
    }

    public function show(NraProducer $producer)
    {
        return view('admin.producers.show', compact('producer'));
    }
}
