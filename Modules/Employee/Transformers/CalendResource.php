<?php

namespace Modules\Employee\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class CalendResource extends JsonResource
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

            'id'                 => $this->id,
            'name'                 => $this->name,
            'discount_percentage'  => $this->discount_percentage,
            'type'                 => calendType()[$this->type]

        ];
        // return parent::toArray($request);
    }
}
