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
            'name'                  => 'required|max:255|min:10',  
            'religion'              => 'nullable|integer',  
            'gender'              => 'required|integer',  
            'study_lang'           => 'required|integer',  
            'is_partner_son'           => 'required|integer',  
            'is_staff_son'           => 'required|integer',  
            'identifcation_number'  => 'nullable|string',  
            'identifcation_expire'         => 'nullable|date',  
            'birthday'                   => 'required|date',  
            'start_data'                   => 'required|date', 
            'start_from'                  => 'string|required',
            'start_year'                   => 'required|date', 
            'note'                  => 'string|nullable',
            'student_parent_id'            => 'nullable|integer',
            'study_language_id'            => 'nullable|integer',
            'address_id'            => 'nullable|integer',
            'contact_id'            => 'nullable|integer',
            'level_id'            => 'nullable|integer',
            'classroom_id'            => 'nullable|integer',
            'part_id'            => 'nullable|integer'
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
