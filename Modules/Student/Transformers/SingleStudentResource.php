<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\Resource;

class SingleStudentResource extends Resource
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
            'name'                  => $this->name,  
            'religion'              => religion()[$this->religion], 
            'gender'                => gender()[$this->gender], 
            'is_staff_son'          => $this->is_staff_son,  
            'birthday'              => $this->birthday,  
            'start_data'            => $this->start_data,
            'education_year'        => $this->education_year, 
            'note'                  => $this->note,
            'student_parent_id'     => $this->student_parent_id,
            'level_id'              => getName('levels', $this->level_id),
            'classroom_id'          => getName('classrooms', $this->classroom_id),
            'part_id'               => getName('parts', $this->part_id),
        ];
    }
}
