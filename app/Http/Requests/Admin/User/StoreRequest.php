<?php

namespace App\Http\Requests\Admin\User;

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
            'full_name' => 'required|min:1',
            'email' => 'required|unique:users|email',
            'avatar' => 'required|image',
            'password' => 'required|',
            'password_confirm' => 'required|same:password',

        ];
    }

    public function attributes()
    {
        return [
            'full_name' => 'Tên người dùng',
            'email' => 'Địa chỉ email',
            'avatar' => 'Ảnh đại diện',
            'password' => 'Mật Khẩu',
            'password_confirm' => 'Nhắc lại mật khẩu',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute Không được để trống',
            'min' => ':attribute quá ngắn',
            'unique'=>':attribute đã tồn tại',
            'image'=>':attribute phải là định dạng ảnh',
            'sam'=>':attribute không giống nhau ',


        ];
    }
}
