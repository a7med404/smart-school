<?php

namespace Modules\Student\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAddressRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'street_1'      => 'string|min:2|max:200',
            'street_2'      => 'string|min:2|max:200|nullable',
            'city'          => 'integer|required',
            'local'         => 'integer|required',            
            'home_number'   => 'string|min:1|max:10|nullable',
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
