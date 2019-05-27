<?php

namespace Modules\Employee\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class SpecialtyResource extends JsonResource
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
            'name'                 => $this->name
        ];
        // return parent::toArray($request);
    }
}
