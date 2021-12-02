<?php

namespace App\Http\Requests\Admin\Room;

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
            'name' => 'required|max:100',
            'introduce' => 'required',
            'room_type' => 'required',
            'price' => 'required|integer|min:0',
            'introduce_of_room' => 'required',
            'feature_image_path' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name không được để trống',
            'name.max' => 'Name không được vượt quá 100 ký tự',
            'introduce.required' => 'Introduce không được để trống',
            'room_type.required' => 'Room Type không được để trống',
            'price.required' => 'Price không được để trống',
            'price.min' => 'Price phải lớn hơn 0',
            'introduce_of_room.required' => '',
            'feature_image_path.image' => '',
            'feature_image_path.mimes' => 'Sai Định dạng file ảnh',
        ];
    }
}
