<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $roles = Role::pluck('name', 'id');
        return view('admin.user.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

        ]);
        $role_id = 2; /* FIXME: Fix role from select in create form */
        User::create([
            'first_names' => $request->first_names,
            'last_names' => $request->last_names,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'document_type' => $request->document_type,
            'document_number' => $request->document_number,
            'status' => $request->status,
            'subject' => $request->subject,
            'position' => $request->position,
            'role_id' => $role_id,
            'message' => $request->message,
        ]);
        return redirect()->route('admin.users.index')->with('success', 'Usuario creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::pluck('name', 'id');
        return view('admin.user.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([

        ]);
        $user->update($request->all());
        return redirect()->route('admin.users.index')->with('success', 'Usuario actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'Usuario eliminado exitosamente');
    }
}