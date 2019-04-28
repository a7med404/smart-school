<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ParentResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
