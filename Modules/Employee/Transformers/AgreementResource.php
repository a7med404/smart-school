<?php

namespace Modules\Employee\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class AgreementResource extends JsonResource
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
            'employee_id'                 => getName('employees', $this->employee_id),
            'type'                        => agreementType()[$this->type]
        ];
        // return parent::toArray($request);
    }
}
