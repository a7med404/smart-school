<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class PayRulsResource extends JsonResource
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
            'name'                => $this->name,
            'is_mandatary'        => is_mandatary()[$this->is_mandatary],
            'note'                => $this->note
            ];
        // return parent::toArray($request);
    }
}
