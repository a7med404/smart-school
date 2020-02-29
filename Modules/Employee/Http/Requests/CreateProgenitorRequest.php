<?php

namespace Modules\Employee\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProgenitorRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'employee_id'                  => 'integer|required',
            // 'amount'                       => 'required',
            // 'financial_year'               => 'integer|required',
            // 'transaction_id'                      => 'integer|required' ,
            // 'date'                         => 'date|required',
            // 'months_number'                => 'integer|required',
            // 'note'                         => 'string|nullable'
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
