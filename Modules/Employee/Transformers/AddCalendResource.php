<?php

namespace Modules\Employee\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class AddCalendResource extends JsonResource
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
            'managament_id'            => getName('managaments', $this->managament_id),
            'department_id'            => getName('departments', $this->department_id),
            'celand_name'              => $this->celand_name,
            'date'                     => $this->date   
        ];
        // return parent::toArray($request);
    }
}
