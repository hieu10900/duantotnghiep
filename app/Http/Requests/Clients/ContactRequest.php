<?php

namespace App\Http\Requests\Clients;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ];
    }
    function messages()
    {
        return [
            'name.required' => 'Họ tên không được để trống !',
            'name.max' => 'Họ tên không được vượt quá 255 kí tự',
            'email.required' => 'Email không được để trống !',
            'email.email' => 'Email không hợp lệ !',
            'phone.required' => 'Số điện thoại không được để trống !',
            'subject.required' => 'Tiêu đề không được để trống !',
            'message.required' => 'Nội dung thoại không được để trống !',

        ];
    }
}
