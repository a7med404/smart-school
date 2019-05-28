<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($this);
      return  [
            'name'                  => $this->name,  
            'religion'              => religion()[$this->religion], 
            'gender'                => gender()[$this->gender], 
            'is_partner_son'        => gender()[$this->is_partner_son],  
            'is_staff_son'          => gender()[$this->is_staff_son], 
            'birthday'              => $this->birthday,  
            'start_data'            => $this->start_data, 
            'start_from'            => $this->start_from,
            'start_year'            => $this->start_year, 
            'note'                  => $this->note,
            'student_parent_id'     => $this->student_parent_id,
            'address_id'            => $this->address,
            'contact_id'            => $this->contact,
            'level_id'              => getName('levels', $this->level_id),
            'classroom_id'          => getName('classrooms', $this->classroom_id),
            'part_id'               => getName('parts', $this->part_id),
            'identifcation_id'      => getName('identifcations', $this->identifcation_id),
            'health_id'             => getName('healths', $this->health_id) 
        ];

    }
}
