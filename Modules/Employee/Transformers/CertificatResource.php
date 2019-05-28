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
            'type'                  =>'required|integer',
            'major'                 => $this->major,
            'degree'                =>'required|integer',    
            'qualification_date'    =>'required|date',
            'experience_years'      =>'required|integer',   
            'employee_id'           =>'required|integer'
            ];
        // return parent::toArray($request);
    }
}
