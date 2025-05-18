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
       //
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
        //
    }
}
