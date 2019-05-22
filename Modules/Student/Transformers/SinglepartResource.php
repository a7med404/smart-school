<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\Resource;

class singlepartResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
         return [
            'id' => $this->id,
            'name' => $this->name,
            'sort' => $this->sort,
            'max_student_number' => $this->max_student_number,
            'level_id' => $this->level_id,
            'classroom_id' => $this->classroom_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
