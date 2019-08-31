<?php

namespace Modules\Education\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Education\Entities\Examination;
use Modules\Education\Transformers\ExaminationResource;

class ExaminationController extends Controller
{
    public function getExamination(Request $request, $student_id)
    {
        $examinations = Examination::where('student_id', $student_id)->get();
        return ExaminationResource::collection($examinations);
    }
}
