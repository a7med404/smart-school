<?php

namespace Modules\Student\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAbsenceRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'student_id'    => 'integer|required',
            'absence_from'  => 'required|date',
            'absence_to'    => 'required|date',
            'absence_reason'=> 'nullable|string'
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
