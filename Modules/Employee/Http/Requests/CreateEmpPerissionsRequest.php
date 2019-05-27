<?php

namespace Modules\Employee\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmpPerissionsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'managament_id'         => 'integer|required',
            'department_id'           => 'integer|required',
            'employee_id'            => 'integer|required',
            'perission_id'      => 'integer|required',
            'from_hour'        => 'time|required',
            'to_hour'          => 'time|required',
            'date'              => 'date|required',
            'note'              => 'longText|nullable'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
