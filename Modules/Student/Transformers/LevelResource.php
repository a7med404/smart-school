<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class LevelResource extends JsonResource
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
            'name' => $this->name, 
            'sort' => $this->sort, 
            'head_master' => $this->head_master, 
            'school_master' => $this->school_master
        ];
        return parent::toArray($request);
    }
}
