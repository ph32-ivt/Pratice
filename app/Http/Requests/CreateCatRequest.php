<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCatRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|max:10',
            'age' => 'numeric',
            'breed_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "bắt buộc nhập tên",
            'name.min' => "tên ít nhất 5 kí tự",
            'age.numeric' => 'tuổi phải là số',
            'breed_id.required' => 'bắt buộc nhập breed_id'
        ];
    }
}
