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
            'type'                         => 'boolean|required',
            'employee_id'                  => 'integer|required',
            'value'                        => 'integer|required',
            'reason'                       => 'string|nullable'
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
