<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class ReportSeparateResource extends JsonResource
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
            'from'              => $this->from,
            'to'                => $this->to,
            'note'              => $this->note
        ];
        // return parent::toArray($request);
    }
}
