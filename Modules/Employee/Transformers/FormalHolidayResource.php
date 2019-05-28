<?php

namespace Modules\Employee\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class FormalHolidayResource extends JsonResource
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
            'name'                 => $this->name,
            'start'                => $this->start,
            'finish'               => $this->finish   
        ];
        // return parent::toArray($request);
    }
}
