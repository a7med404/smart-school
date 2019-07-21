<?php

namespace Modules\Employee\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class ResignationResource extends JsonResource
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
            'id'                 => $this->id,
            'employee_id'                         => getName('employees', $this->employee_id),
            'applicant_to'                        => $this->applicant_to,
            'reason'                              => $this->reason
        ];
        // return parent::toArray($request);
    }
}
