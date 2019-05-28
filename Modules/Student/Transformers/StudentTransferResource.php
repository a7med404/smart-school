<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentTransferResource extends JsonResource
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
            'transfer_to'         => $this->transfer_to,
            'duration'            => $this->duration,
            'payment_status'      => payment_status()[$this->payment_status],
        ];
        // return parent::toArray($request);
    }
}
