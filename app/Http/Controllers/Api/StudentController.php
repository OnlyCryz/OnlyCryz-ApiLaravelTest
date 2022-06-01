<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StudentController extends Controller
{
    public function index()
    {
        return StudentResource::collection(Student::latest()->paginate(10));
    }

    public function store(Request $request)
    {
        $request->validate([
            'university' => 'required',
            'career' => 'required',
            'user_id' => 'required',
        ]);

        $student = Student::create($request->all());

        return response()->json([
            'message' => "Student Created successfully!",
            "data" => new StudentResource($student),
        ], 200);
    }

    public function show(Student $student)
    {
        return new StudentResource($student);
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'university' => 'required',
            'career' => 'required',
        ]);

        $student->update($request->all());

        return response()->json([
            'message' => 'Student Update successfully!',
            "data" => new StudentResource($student),
        ], Response::HTTP_OK);
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json([
            'message' => 'Student Deleted successfully!',
        ], Response::HTTP_ACCEPTED);
    }
}
