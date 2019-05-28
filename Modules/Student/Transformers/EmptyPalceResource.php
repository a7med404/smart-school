<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class EmptyPalceResource extends JsonResource
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
            'level_id'              => getName('levels', $this->level_id),
            'classroom_id'          => getName('classrooms', $this->classroom_id),
            'part_id'               => getName('parts', $this->part_id),
            'name'                  => $this->name
        ];
        // return parent::toArray($request);
    }
}
