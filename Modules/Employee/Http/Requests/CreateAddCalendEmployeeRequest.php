<?php

namespace Modules\Employee\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAddCalendEmployeeRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'management_id'     => 'integer|required',
            'department_id'     => 'integer|required',
            'employee_id'       => 'integer|required',
            'calend_id'         => 'integer|required',
            'date'              => 'date|required',
            'type'              => 'integer|required'
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
