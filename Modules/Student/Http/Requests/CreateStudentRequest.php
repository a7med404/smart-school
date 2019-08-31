<?php

namespace Modules\Student\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateStudentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [ 
            'name'                  => 'required|max:255|min:5',  
            'religion'              => 'nullable|integer',  
            'gender'                => 'required|integer',  
            'is_staff_son'          => 'boolean',  
            'birthday'              => 'required|date',  
            'start_data'            => 'required|date', 
            'education_year'        => 'required', 
            'note'                  => 'string|nullable',
            'address_id'            => 'nullable|integer',
            'contact_id'            => 'nullable|integer',
            'level_id'              => 'nullable|integer',
            'classroom_id'          => 'nullable|integer',
            'part_id'               => 'nullable|integer',
            'identifcation_id'      => 'nullable|integer',
            'health_id'             => 'nullable|integer'
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
