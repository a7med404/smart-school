<?php

namespace Modules\Education\Http\Controllers\API;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Education\Entities\Evaluation;
use Modules\Education\Transformers\EvaluationResource;

class EvaluationController extends Controller
{
    public function getEvaluation(Request $request, $student_id)
    {
        $evaluations = Evaluation::where('student_id', $student_id)->get();
        return EvaluationResource::collection($evaluations);
    }
}
