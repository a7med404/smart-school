<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\Resource;

class singleLevelResource extends Resource
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
            'head_master' => $this->head_master,
            'school_master' => $this->school_master,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
