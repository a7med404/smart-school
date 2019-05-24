<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PartResource extends ResourceCollection
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
            'name'                    => $this->name,
            'sort'                    => $this->sort,
            'level_id'                => getName('levels', $this->level_id),
            'max_student_number'      => $this->max_student_number,
            'classroom_id'            => getName('classrooms', $this->classroom_id)
        ];
        // return parent::toArray($request);
    }
}
