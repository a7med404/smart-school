<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\Resource;

class singleClassroomResource extends Resource
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
            'is_end' => $this->is_end,
            'level_id' => $this->level_id,
            'division_id' => $this->division_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    
    }
}
