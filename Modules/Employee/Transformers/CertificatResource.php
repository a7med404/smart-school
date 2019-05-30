<?php

namespace Modules\Employee\Transformers;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CertificatResource extends ResourceCollection
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
            'name'                  => $this->name,
            'Applicant'             => $this->Applicant,
            'type'                  => certificateType()[$this->type],
            'major'                 => $this->major,
            'degree'                => certificateDegree()[$this->degree],    
            'qualification_date'    => $this->name,
            'experience_years'      => experience_years() [$this->experience_years],  
            'employee_id'           => getName('employees', $this->employee_id),
            ];
        // return parent::toArray($request);
    }
}
