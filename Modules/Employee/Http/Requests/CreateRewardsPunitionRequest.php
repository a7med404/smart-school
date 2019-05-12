<?php

namespace Modules\Employee\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRewardsPunitionRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'finance_year'                 => 'integer|required',
            'date'                         => 'date|required',
            'manage_id'                    => 'integer|required',
            'dept_id'                      => 'integer|required',
            'type'                         => 'boolean|required',
            'emp_id'                       => 'integer|required',
            'value'                        => 'float|required',
            'reason'                       => 'longText|nullable'
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
