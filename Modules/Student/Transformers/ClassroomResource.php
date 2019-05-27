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
            'id'   => $this->id, 
            'level_id' => $this->level, 
            'name' => $this->name, 
            'sort' => $this->sort, 
        ];
        // return parent::toArray($request);
    }
}
