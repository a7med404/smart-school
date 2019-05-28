<?php

namespace Modules\Student\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentParentResource extends JsonResource
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
            'mr_d'                  => mr_d()[$this->mr_d],
            'name'                  => $this->name,  
            'religion'              => religion()[$this->religion],   
            'relation'              => relation ()[$this->relation ], 
            'nationality'           => nationality ()[$this->nationality ],  
            'identifcation_id'      => getName('identifcations', $this->identifcation_number),  
            'qualification'         => $this->qualification,  
            'job'                   => $this->job,  
            'work_place'            => $this->work_place,  
            'martial'               => martial()[$this->martial],   
            'phone_number'          => $this->phone_number,
            'address_id'            => getName('addresses', $this->address_id),
            'email'                 => $this->email, 
            'is_die'                => is_die()[$this->is_die], 
            'note'                  => $this->note, 
        ];
        // return parent::toArray($request);
    }
}
