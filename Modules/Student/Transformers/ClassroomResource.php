<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class ClassroomResource extends JsonResource
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
            'id'            => $this->id, //getName('students', $this->student_id), 
            'level_id'      => \DB::table('levels')->where('id', $this->level_id)->first(), //getName('levels', $this->level_id), 
            'name'          => $this->name,  
            'sort'          => $this->sort, 
        ];
        // return parent::toArray($request);
    }
}
