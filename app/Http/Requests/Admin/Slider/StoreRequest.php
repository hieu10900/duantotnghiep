<?php

namespace App\Http\Requests\Admin\Slider;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'image' => 'required',
            'content' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'image.required' => 'Ảnh không được để trống',
            'content.required' => 'Nội dung không được để trống',
        ];
    }
}
