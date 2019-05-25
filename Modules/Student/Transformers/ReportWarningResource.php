<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class ReportWarningResource extends JsonResource
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
            'student_id'        => getName('students', $this->student_id),
            'note'              => $this->note
        ];
        // return parent::toArray($request);
    }
}
