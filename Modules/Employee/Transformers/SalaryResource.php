<?php

namespace Modules\Employee\Transformers;

use Illuminate\Http\Resources\Json\ResourceCollection;

class SalaryResource extends ResourceCollection
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
            'basic_salary'      => $this->basic_salary
        ];
        // return parent::toArray($request);
    }
}
