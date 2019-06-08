<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class PartResource extends JsonResource
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
            'id'   => $this->id, 
            'level_id'               => \DB::table('levels')->where('id', $this->level_id)->first(), //getName('levels',$this->level_id), 
            'name'                   => $this->name, 
            'sort'                   => $this->sort, 
            'max_student_number'     => $this->max_student_number, 
            'classroom_id'           => \DB::table('classrooms')->where('id', $this->classroom_id)->first() //getName('classrooms',$this->classroom_id)
        ];
        return parent::toArray($request);
    }
}
