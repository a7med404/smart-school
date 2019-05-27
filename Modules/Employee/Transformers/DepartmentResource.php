<?php

namespace Modules\Employee\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class DepartmentResource extends JsonResource
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
            'managament_id'        => getName('managaments', $this->managament_id),
            'name'                 => $this->name
        ];
        // return parent::toArray($request);
    }
}
