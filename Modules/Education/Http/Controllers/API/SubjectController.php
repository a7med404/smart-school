<?php

namespace Modules\Education\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Education\Entities\Subject;
use Modules\Student\Entities\Student;

class SubjectController extends Controller
{
    // public function getSubject(Request $request, $student_id)
    // {
    //     $student = Student::find($student_id);
    //     $subjects = Subject::where('part_id', $student->part_id)->get();
    //     dd($subjects);
    // }
}
