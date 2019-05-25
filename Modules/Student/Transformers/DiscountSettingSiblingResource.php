<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class DiscountSettingSiblingResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    { 
        return[
            'ranking'          => $this->ranking,
            'value'            => $this->value,
            'type'             => valueOrPersentage()[$this->type]
        ];
        // return parent::toArray($request);
    }
}
