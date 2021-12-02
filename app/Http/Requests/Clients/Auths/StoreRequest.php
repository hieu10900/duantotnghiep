<?php

namespace App\Http\Requests\Clients\Auths;

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
            'full_name' => 'required|max:255',
            'password' => 'required|min:6|max:255|confirmed',
            'email' => 'required|email:rfc,dns|unique:users',
        ];
    }
    function messages()
    {
        return [
            'full_name.required' => 'Họ tên không được để trống !',
            'full_name.max' => 'Họ tên không được vượt quá 255 kí tự',
            'password.required' => 'Mật khẩu không được để trống !',
            'password.max' => 'Mật khẩu không được vượt quá 255 kí tự!',
            'password.min' => 'Mật khẩu có ít nhất 6 kí tự !',
            'password.confirmed' => 'Xác nhận mật khẩu không chính xác !',
            'email.required' => 'Email không được để trống !',
            'email.email' => 'Email không hợp lệ !',
            'email.unique' => 'Email đã đăng kí tài khoản trước đây, vui lòng đăng nhập !',
        ];
    }
}
