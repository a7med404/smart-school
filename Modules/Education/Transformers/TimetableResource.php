<?php

namespace Modules\Education\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class TimetableResource extends JsonResource
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
            'id'                => $this->id, 
            'employee'          => $this->employee->full_name, 
            'day'               => daysOfTheWeak()[$this->day], 
            'subject'           => $this->subject->name, 
            'subject_number'    => subjectNumber()[$this->subject_number],
            'time'              => $this->time,
            'part'              => $this->part->name
        ];
    }
}
