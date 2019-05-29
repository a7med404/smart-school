<?php

namespace Modules\Employee\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($this);
        return [
            'full_name'              => $this->full_name,
            'gender'                => gender()[$this->gender],
            'religion'              => religion()[$this->religion],
            'birth_date'            => $this->birth_date,
            'identification_id'     => getName('identifcations', $this->identification_id),
            'managament_id'         => getName('managaments', $this->managament_id),
            'department_id'         => getName('departments', $this->department_id),
            'hiring_date'           => $this->hiring_date,
            'job_title'             => job_title()[$this->job_title],
            'martial_status'        => martial()[$this->martial_status],
            'start_date'            => $this->start_date,
            'join_year'             => $this->join_year,
            'picture'               => $this->picture,
            'note'                  => $this->note,
            'address_id'            => getName('addresses', $this->address_id),
            'contact_id'            => getName('contacts', $this->contact_id)
        ];
        // return parent::toArray($request);
    }
}
