<?php

namespace Modules\Employee\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateResignationRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'employee_id'                         => 'integer|required',
            'applicant_to'                        => 'string|required',
            'reason'                              => 'string|required'
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
