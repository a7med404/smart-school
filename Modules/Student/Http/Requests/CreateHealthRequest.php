<?php

namespace Modules\Student\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateHealthRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return  [
            'doctor_name'       => 'required|max:255|min:10',
            'doctor_number'     => 'nullable|max:14|min:6',
            'blood_type'        => 'required|integer', 
            'insurance_number'  => 'nullable|string', 
            'health_status'     => 'string|nullable'
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
