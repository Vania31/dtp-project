<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentControllers extends Controller
{
    public function index() 
    {
        return view('students.index', [
            'students' => Student::get(),
        ]);
    }

    public function create() 
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->name = $request->name;
        $student->address = $request->address;
        $student->phone_number = $request->phone_number;
        $student->class = $request->class;

        $student->save();

        return back();
    }
}