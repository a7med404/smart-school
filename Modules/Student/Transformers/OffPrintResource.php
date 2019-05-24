<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\ResourceCollection;

class OffPrintResource extends ResourceCollection
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
            'student_id'          => getName('students', $this->student_id),
            'employee_id'         => getName('employees', $this->employee_id),
            'type'                =>offPrint()[$this->type],
        ];
        // return parent::toArray($request);
    }
}
