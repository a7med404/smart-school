<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class PermissiontodepartResource extends JsonResource
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
            'date'             => $this->date,
            'note'             => $this->note,
            'student_id'       => getName('students', $this->student_id),
            ];
        // return parent::toArray($request);
    }
}
