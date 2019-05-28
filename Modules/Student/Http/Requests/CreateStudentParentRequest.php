<?php

namespace Modules\Student\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'name'                  => 'required|max:255|min:10',  
            'religion'              => 'nullable|integer',  
            'relation'              => 'required|integer',
            'nationality'           => 'required|integer',  
            'identifcation_id'      => 'require|integer',  
            'qualification'         => 'nullable|string',  
            'job'                   => 'nullable|string',  
            'work_place'            => 'nullable|string',  
            'martial'               => 'nullable|integer',  
            'phone_number'          => 'required|max:14|min:6',  
            'address_id'            => 'nullable|integer', 
            'email'                 => 'nullable|max:255|min:5|email', 
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
