<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AbsenceResource extends ResourceCollection
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
            'student_id'    => getName('students', $this->student_id),
            'absence_from'  => $this->absence_from,
            'absence_to'    => $this->absence_to,
            'absence_reason'=> $this->absence_reason
        ];
        // return parent::toArray($request);
    }
}
