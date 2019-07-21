<?php

namespace Modules\User\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return  [
            'id'            => $this->id,
            'name'          => $this->name,
            'phone_number'  => $this->phone_number,
            'email'         => $this->email,
            'username'      => $this->username,
            'status'        => status()[$this->status],
            'note'          => $this->note,
        ];
        // return parent::toArray($request);
    }
}
