<?php

namespace Modules\Employee\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEvaluationEmpRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'level_id'                  => 'integer|required',
            'department_id'             => 'integer|required',
            'employee_id'               => 'integer|required',
            'item_id'                   => 'integer|required',
            'real_degree'               => 'integer|required',
            'degree'                    => 'integer|required',
            'date'                      => 'date|required' 
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
