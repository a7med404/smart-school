<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\Resource;

class SingleHealthResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return  [
            'doctor_name'       => $this->doctor_name,
            'doctor_number'     => $this->doctor_number,
            'blood_type'        => blood_type()[$this->blood_type],
            'insurance_number'  => $this->insurance_number,
            'health_status'     => $this->health_status
        ];
        // return parent::toArray($request);
    }
}
