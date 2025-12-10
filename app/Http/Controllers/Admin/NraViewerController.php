<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NraViewer;
use App\Models\NraCountry;

class NraViewerController extends Controller
{
    public function index()
    {
        $viewers = NraViewer::with('country')->paginate(10);
        return view('admin.viewers.index', compact('viewers'));
    }

    /**
     * Display the specified viewer.
     *
     * @param  \App\Models\NraViewer  $viewer
     * @return \Illuminate\Http\Response
     */
    public function show(NraViewer $viewer)
    {
        // This resolves the bug. It loads the viewer details and passes them to the view.
        return view('admin.viewers.show', compact('viewer'));
    }

    public function create()
    {
        $countries = NraCountry::all();
        return view('admin.viewers.create', compact('countries'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'F_Name' => 'required|string|max:255',
            'L_Name' => 'required|string|max:255',
            'Email' => 'required|email|unique:nra_viewer,Email',
            'Country_Code' => 'required|string|exists:nra_country,Country_Code',
        ]);

        NraViewer::create($request->only(['F_Name','L_Name','Email','Country_Code']));

        return redirect()->route('admin.viewers.index')->with('success', 'Viewer created successfully');
    }

    public function edit(NraViewer $viewer)
    {
        $countries = NraCountry::all();
        return view('admin.viewers.edit', compact('viewer','countries'));
    }

    public function update(Request $request, NraViewer $viewer)
    {
        $request->validate([
            'F_Name' => 'required|string|max:255',
            'L_Name' => 'required|string|max:255',
            'Email' => 'required|email|unique:nra_viewer,Email,'.$viewer->Viewer_ID.',Viewer_ID',
            'Country_Code' => 'required|string|exists:nra_country,Country_Code',
        ]);

        $viewer->update($request->only(['F_Name','L_Name','Email','Country_Code']));

        return redirect()->route('admin.viewers.index')->with('success', 'Viewer updated successfully');
    }

    public function destroy(NraViewer $viewer)
    {
        $viewer->delete();
        return redirect()->route('admin.viewers.index')->with('success', 'Viewer deleted successfully');
    }
}