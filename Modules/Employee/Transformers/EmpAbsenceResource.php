<?php

namespace Modules\Employee\Transformers;
use Modules\Employee\Transformers\EmployeeResource;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;

class EmpAbsenceResource extends JsonResource
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
            'empolyee'                            => $this->Employee?new EmployeeResource($this->Employee):"",
            'absence_from'                        => $this->absence_from,
            'absence_to'                          => $this->absence_to,
            'days'                                => Carbon::create($this->absence_from)->diffInDays(Carbon::create($this->absence_to)) ,
            'absence_reason'                      => $this->absence_reason
        ];
        // return parent::toArray($request);
    }
}
