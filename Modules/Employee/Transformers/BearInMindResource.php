<?php

namespace Modules\Employee\Transformers;
use Modules\Employee\Transformers\EmployeeResource;

use Illuminate\Http\Resources\Json\JsonResource;

class BearInMindResource extends JsonResource
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
            'note'                        => $this->note,
            'date'                        => $this->date,
            'employee'                 =>  $this->Employee?new EmployeeResource($this->Employee):""
        ];
        // return parent::toArray($request);
    }
}
