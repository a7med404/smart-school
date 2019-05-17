<?php

namespace Modules\Employee\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmpHolidayRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'employee_id'                       => 'integer|required',
            'holiday_id'                   => 'integer|required',
            'balance'                      => 'integer|required',
            'from'                         => 'date|required',
            'to'                           => 'date|required',
            'note'                         => 'longText|nullable'
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
