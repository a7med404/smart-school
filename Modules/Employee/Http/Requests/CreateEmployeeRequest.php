<?php

namespace Modules\Employee\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmployeeRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
       'full_name'              => 'required|max:255|min:10',
        'gender'                => 'required|integer',
        'religion'              => 'nullable|integer',
        'birth_date'            => 'required|date',
        // 'identification_id'     => 'required|integer',
        'managament_id'         => 'required|integer',
        'department_id'         => 'required|integer',
        'hiring_date'           => 'nullable|date',
        'job_title'             => 'nullable',
        'martial_status'        => 'required|integer',
        'start_date'            => 'nullable|date',
        // 'join_year'             => 'required|integer',
        'picture'               => 'nullable',
        'note'                  => 'nullable',
        // 'address_id'            =>'required|integer',
        // 'contact_id'            =>'required|integer'
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
