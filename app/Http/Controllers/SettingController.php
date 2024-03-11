<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = Setting::all();
        return view('admin.setting.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /* $data = $request->validate([
            
        ]); */
        Setting::create($request->all());
        return redirect()->route('admin.settings.index')->with('success', 'Configuración creada exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Setting $setting)
    {
        $setting = Setting::findOrfail($setting->id);
        return view('admin.setting.show', compact('setting'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        $setting = Setting::findOrfail($setting->id);
        return view('admin.setting.edit', compact('setting'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Setting $setting)
    {
        $data = $request->validate([
            
        ]);
        $setting->update($data);
        return redirect()->route('admin.settings.index')->with('success', 'Configuración actualizada exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        $setting->delete();
        return redirect()->route('admin.settings.index')->with('success', 'Configuración eliminada exitosamente');
    }
}
