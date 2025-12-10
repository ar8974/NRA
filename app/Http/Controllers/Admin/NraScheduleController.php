<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NraSchedule;
use App\Models\NraEpisode;

class NraScheduleController extends Controller
{
    public function index()
    {
        $schedules = NraSchedule::with('episode')->paginate(10);
        return view('admin.schedules.index', compact('schedules'));
    }

    public function create()
    {
        $episodes = NraEpisode::all();
        return view('admin.schedules.create', compact('episodes'));
    }

    // In App\Http\Controllers\Admin\NraScheduleController.php

public function show(string $id)
{
    // Retrieve the schedule record by its ID.
    // Assuming your Schedule model is named 'Schedule'.
    // $schedule = \App\Models\Schedule::findOrFail($id); 
    $schedule = \App\Models\NraSchedule::findOrFail($id);

    // Return a view, passing the schedule data.
    return view('admin.schedules.show', [
        'schedule' => $schedule,
    ]);
}

    public function store(Request $request)
    {
        $request->validate([
            'Ep_ID' => 'required|exists:nra_episode,Ep_ID',
            'Ep_Start' => 'required|date',
            'Ep_End' => 'required|date|after:Ep_Start',
            'Tech_Interrupt' => 'required|in:YES,NO',
            'Viewers' => 'required|integer|min:0',
        ]);

        NraSchedule::create($request->only([
            'Ep_ID',
            'Ep_Start',
            'Ep_End',
            'Tech_Interrupt',
            'Viewers',
        ]));

        return redirect()->route('admin.schedules.index')->with('success', 'Schedule created successfully');
    }

    public function edit(NraSchedule $schedule)
    {
        $episodes = NraEpisode::all();
        return view('admin.schedules.edit', compact('schedule','episodes'));
    }

    public function update(Request $request, NraSchedule $schedule)
    {
        $request->validate([
            'Ep_ID' => 'required|exists:nra_episode,Ep_ID',
            'Ep_Start' => 'required|date',
            'Ep_End' => 'required|date|after:Ep_Start',
            'Tech_Interrupt' => 'required|in:YES,NO',
            'Viewers' => 'required|integer|min:0',
        ]);

        $schedule->update($request->only(['Ep_ID','Ep_Start','Ep_End','Tech_Interrupt','Viewers']));

        return redirect()->route('admin.schedules.index')->with('success', 'Schedule updated successfully');
    }

    public function destroy(NraSchedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('admin.schedules.index')->with('success', 'Schedule deleted successfully');
    }
}
