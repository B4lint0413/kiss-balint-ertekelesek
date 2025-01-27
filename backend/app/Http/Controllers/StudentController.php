<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreStudentRequest;
use App\Http\Requests\UpdateStudentRequest;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $students = Student::with(['grades', 'grades.subject'])->get();
        if ($request->query('format') == 'pdf') {
            $mpdf = new \Mpdf\Mpdf();
            $mpdf->WriteHTML(view('content', ['students' => $students]));
            return $mpdf->Output();
        }
        return StudentResource::collection($students);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return new StudentResource($student->load(['grades', 'grades.subject']));
    }
}
