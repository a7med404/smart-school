<?php

namespace Modules\Student\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePayClassRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'value'                => 'required|string',
        'pay_rul_id'           => 'required|integer',
        'level_id'             => 'required|integer',
        'classroom_id'         => 'required|integer'
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
