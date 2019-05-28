<?php

namespace Modules\Employee\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCertificatRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'name'                  =>'required|string',
        'Applicant'             =>'required|string',
        'type'                  =>'required|integer',
        'major'                 =>'required|string',
        'degree'                =>'required|integer',    
        'qualification_date'    =>'required|date',
        'experience_years'      =>'required|integer',   
        'employee_id'           =>'required|integer'
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
