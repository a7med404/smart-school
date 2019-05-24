<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PayClassResource extends ResourceCollection
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
            'value'                   => $this->value,
            'pay_rul_id'              => getName('pay_ruls', $this->pay_rul_id),
            'level_id'                => getName('levels', $this->level_id),
            'classroom_id'            => getName('classrooms', $this->classroom_id),
            'academic_year'           => $this->academic_year
            ];
        // return parent::toArray($request);
    }
}
