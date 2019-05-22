<?php

namespace Modules\Student\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEmptyPalceRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'level_id'              => 'required|integer',
            'classroom_id'          => 'required|integer',
            'part_id'               => 'required|integer',
            'name'                  => 'required|string'
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
