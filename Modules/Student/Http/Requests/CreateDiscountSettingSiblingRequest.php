<?php

namespace Modules\Student\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDiscountSettingSiblingRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ranking'          => 'required|integer',
            'value'            => 'required|float',
            'type'             => 'required|boolean'
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
