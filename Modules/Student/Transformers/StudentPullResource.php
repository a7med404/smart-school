<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentPullResource extends JsonResource
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
            'student_id'                => getName('students', $this->student_id),
            'pull_date'                 => $this->pull_date,
            'reason'                    => $this->reason
        ];
        // return parent::toArray($request);
    }
}
