<?php

namespace Modules\Education\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class EvaluationResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'        => $this->id, 
            'student'   => $this->student->name, 
            'employee'  => $this->employee->full_name, 
            'subject'   => $this->subject->name, 
            'for'       => evaluationFor()[$this->for],
            'ratio'     => $this->ratio,
            'note'      => $this->note
        ];
    }
}
