<?php

namespace Modules\Employee\Transformers;

use Illuminate\Http\Resources\Json\ResourceCollection;

class EmpAbsenceResource extends ResourceCollection
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
