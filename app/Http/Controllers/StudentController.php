<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        return view('index', ['students' => Student::latest()->paginate(10)]);
    }
}
