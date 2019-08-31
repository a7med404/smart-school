<?php

namespace Modules\Education\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class ExaminationResource extends JsonResource
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
            'type'      => examinationType()[$this->type],
            'ratio'     => $this->ratio,
            'part'      => $this->part->name
        ];
    }
}
