<?php

namespace Modules\Student\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CreateStudentParentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'mr_d'                  => 'required|integer',
            'name'                  => 'required|max:255|min:6',  
            'religion'              => 'nullable|integer',  
            'relation'              => 'required|integer',
            'nationality'           => 'required|integer',  
            'identifcation_id'      => 'require|integer',  
            'qualification'         => 'nullable|string',  
            'job'                   => 'nullable|string',  
            'work_place'            => 'nullable|string',  
            'martial'               => 'nullable|integer',  
            'phone_number'          => 'required|max:14|min:6',  
            'email'                 => 'nullable|max:255|min:5|email', 
            'username'              => 'unique:student_parents|max:30|min:6'.\Request::instance()->id,  
            'password'              => 'nullable|max:255|min:6|confirmed', 
            'is_die'                => 'nullable|integer', 
            'note'                  => 'string|nullable'
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
