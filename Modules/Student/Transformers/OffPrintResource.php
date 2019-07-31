<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class OffPrintResource extends JsonResource
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
            'id'                    => $this->id,
            'created_at'            => $this->created_at,
            'student_id'            => getName('students', $this->student_id),
            'type'                  => $this->type,
        ];
        // return parent::toArray($request);
    }
}
