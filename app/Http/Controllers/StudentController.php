<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Models\Student;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = Student::all(); // Fetch all students using Eloquent
        return view('student.index', compact('student')); // Return to a view
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudentRequest $request)
    {
        try {
            $validated = $request->validated();
            Student::create($validated);
            return redirect()->route('student.index')->with('success', 'Student created successfully!');
        } catch (Exception $e) {
            return redirect()->back()->withErrors('An error occurred: ' . $e->getMessage());
        }
    }
    public function show(Student $student)
    {
        return view('student.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    public function update(UpdateStudentRequest $request, Student $student)
    {
        $validated = $request->validated();
        $student->update($validated);
        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }

    public function login(Request $request)
    {   
        $student_id = $request->input('student_id');
        $password = $request->input('password');
        $original_password = DB::table('students')->where('admin_id', $student_id)->get('password');
        if ($password == $original_password[0]->password) {
            return redirect('admins')->with('success', 'Logged in successfully!');
        }
        return back()->withErrors(['Password or username is not correct']);
    }


}


