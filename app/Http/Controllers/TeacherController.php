<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // public function index()
    // {


    //     $teachers = Teacher::paginate(5);
    //     return view("teachers.index", compact("teachers"));
    // }
    public function index()
    {
        // Sort by tid (ID) in ascending order so the positions never change
        $teachers = Teacher::orderBy('tid', 'asc')->paginate(5);

        // OR: Sort by newest created first
        // $teachers = Teacher::latest()->paginate(20);

        return view("teachers.index", compact("teachers"));
    }
    public function create()
    {
        return view('teachers.create');
    }
    public function store(Request $request)
    {
        // 1. Validate both fields
        $request->validate([
            'full_name' => 'required|string|max:255',
            'tel'       => 'required|min:8|max:20',
        ]);

        // 2. Create the record
        Teacher::create([
            'full_name' => $request->full_name,
            'tel'       => $request->tel,
        ]);

        // 3. Redirect with success message
        return redirect()->route('teachers.index')->with('addsuccess', 'Teacher added successfully.');
    }

    public function edit(string $id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teachers.edit', compact("teacher"));
    }

    public function update(Request $request, string $id)
    {
        $teacher = Teacher::findOrFail($id);

        // FIX: Use validation rules, not the input values
        $request->validate([
            'full_name' => 'required|string|max:255',
            'tel'       => 'required|string|max:20',
        ]);

        // Update the record
        $teacher->update($request->all());

        // Redirect with success message
        return redirect()->route('teachers.index')->with('updatesuccess', 'Teacher updated successfully.');
    }

    public function destroy($id)
    {
        // If your primary key is 'tid', ensure your model has:
        // protected $primaryKey = 'tid';
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->route('teachers.index')
            ->with('deletesuccess', 'Teacher deleted successfully.');
    }
}
