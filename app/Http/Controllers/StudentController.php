<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Group $group)
    {
        $students = $group->students;
        return view('admin.student.index', compact('students', 'group'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Group $group)
    {
        return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Group $group)
    {
        $request->validate([

        ]);
        Student::create($request->all());
        return redirect()->route('admin.students.index')->with('success', 'Estudiante creado exitosamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student, Group $group)
    {
        return view('admin.student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student, Group $group)
    {
        return view('admin.student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student, Group $group)
    {
        $request->validate([

        ]);
        $student->update($request->all());
        return redirect()->route('admin.students.index')->with('success', 'Estudiante actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student, Group $group)
    {
        $student->delete();
        return redirect()->route('admin.students.index')->with('success', 'Estudiante eliminado exitosamente');
    }
}
