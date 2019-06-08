<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class DiscountSettingParentResource extends JsonResource
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
            'value'                     =>  $this->value,
            'experience_years'          =>  $this->experience_years,
            'type'                      => valueOrPersentage()[$this->type]
        ];
        // return parent::toArray($request);
    }
}
