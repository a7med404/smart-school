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
            'study_lang'            => studylang()[$this->study_lang],
            'is_partner_son'        => $this->is_partner_son,  
            'is_staff_son'          => $this->is_staff_son,  
            'birthday'              => $this->birthday,  
            'start_data'            => $this->start_data, 
            'start_from'            => $this->start_from,
            'start_year'            => $this->start_year, 
            'note'                  => $this->note,
            'student_parent_id'     => $this->student_parent_id,
            'address'               => $this->address,
            'contact'               => $this->contact,
            'level'                 => getName('levels', $this->level_id),
            'classroom'             => getName('classrooms', $this->classroom_id),
            'part'                  => getName('parts', $this->part_id),
            'identifcation'         => getName('identifcations', $this->identifcation_id),
        ];

    }
}
