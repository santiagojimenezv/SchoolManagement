<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = Group::all();
        return view('admin.group.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.group.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
        ]);
        Group::create($request->all());
        /* TODO: Organizar la lista de profesores para la direccion de grupo */
        return redirect()->route('admin.groups.index')->with('success', 'Grupo creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Group $group)
    {
        return view('admin.group.show', compact('group'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Group $group)
    {
        return view('admin.group.edit', compact('group'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Group $group)
    {
        $request->validate([
            
        ]);
        $group->update($request->all());
        return redirect()->route('admin.groups.index')->with('success', 'Grupo actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route('admin.groups.index')->with('success', 'Grupo eliminado exitosamente');
    }
}
