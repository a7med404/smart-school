<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class AttendanceResource extends JsonResource
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
             'date'           => $this->date,
             'status'         => attendanceStatus()[$this->status], 
             'student_id'     => getName('students', $this->student_id),
             'note'           => $this->note
        ];
        // return parent::toArray($request);
    }
}
