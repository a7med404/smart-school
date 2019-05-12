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
            'manage_id'         => 'integer|required',
            'dept_id'           => 'integer|required',
            'emp_id'            => 'integer|required',
            'perission_id'      => 'integer|required',
            'from_houre'        => 'time|required',
            'to_houre'          => 'time|required',
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
