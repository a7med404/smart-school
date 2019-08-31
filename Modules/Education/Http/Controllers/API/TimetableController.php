<?php

namespace Modules\Education\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Education\Entities\Timetable;
use Modules\Student\Entities\Student;
use Modules\Education\Transformers\TimetableResource;

class TimetableController extends Controller
{
    public function getTimetable(Request $request, $student_id)
    {
        $student = Student::find($student_id);
        $timetables = Timetable::where('part_id', $student->part_id)->get();
        return TimetableResource::collection($timetables);
    }
}
