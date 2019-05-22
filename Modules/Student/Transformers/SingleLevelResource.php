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
            'manager_name' => $this->manager_name,
            'super_name' => $this->super_name,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
