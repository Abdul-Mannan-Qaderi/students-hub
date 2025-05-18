<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Tutor;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::with('tutor')->orderBy('created_at', 'desc')->paginate(10);
        return view('students.index', ['students' => $students]);
    }
    public function show(string $id)
    {
        $student = Student::with('tutor')->findOrFail($id);
        return view('students.show', ['student'=> $student]);
    }
    
 
    public function create()
    {
        $tutors = Tutor::all();
        return view('students.create', ['tutors'=> $tutors]);
    }
    
  
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=> 'required|string|max:255',
            'rank'=> 'required|integer|min:0|max:100',
            'bio'=> 'required|min:20|max:1000',
            'tutor_id'=> 'required|exists:tutors,id',
        ]);

        Student::create($validated);
        return redirect()->route('students.index');
    }

    
    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('students.index');
    }
}
