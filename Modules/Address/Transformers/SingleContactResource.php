<?php

namespace Modules\Address\Transformers;

use Illuminate\Http\Resources\Json\Resource;

class SingleContactResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
