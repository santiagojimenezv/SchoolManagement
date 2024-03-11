<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedule = Schedule::all();
        return view('admin.schedule.index', compact('schedule'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.schedule.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /*$data = $request->validate([

        ]); */
        Schedule::create($request->all());        
        return redirect()->route('admin.schedule.index')->with('success', 'Agenda creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Schedule $schedule)
    {
        return view('admin.schedule.show', compact('schedule'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Schedule $schedule)
    {
        return view('admin.schedule.edit', compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Schedule $schedule)
    {
        $request->validate([

        ]);
        $schedule->update($request->all());
        return redirect()->route('admin.schedule.index')->with('success', 'Agenda actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Schedule $schedule)
    {
        $schedule->delete();
        return redirect()->route('admin.schedule.index')->with('success', 'Agenda eliminado exitosamente');
    }
}