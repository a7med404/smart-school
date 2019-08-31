<?php

namespace Modules\Student\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateAuthStudentParentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            #TODO::handel unigue field at all tables
            'username'  => ['max:30|min:6', Rule::unique('student_parents')->ignore($this->id)],
            'password'  => 'nullable|max:255|min:6|confirmed', 
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
