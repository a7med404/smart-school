<?php

namespace Modules\Student\Http\Controllers\API;

use Illuminate\Routing\Controller;
use Modules\Student\Entities\Attendance;
use Modules\Student\Transformers\AttendanceResource;

class AttendanceController extends Controller
{
    public function getAttendance($student_id, $month)
    {
        $attendances = Attendance::where('student_id', $student_id)->whereMonth('date', $month)->get();
        return AttendanceResource::collection($attendances);
    }
}
