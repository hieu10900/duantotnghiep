<?php

namespace App\Http\Requests\Admin\room_types;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|max:100',
            'introduce' => 'required',
            'image' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Loại phòng không được để trống',
            'name.max' => 'Họ tên không được vượt quá 100 ký tự',
            'image.required' => 'Ảnh không được để trống',
            'introduce.required' => 'Nội dung không được để trống',
        ];
    }
}
