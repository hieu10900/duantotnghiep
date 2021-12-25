<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class storeBooking extends FormRequest
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
            'guest_name' => 'required|min:1',
            'phone' => 'required|',
            'guest_email' => 'required|email',
            'check_in' => 'required|date',
            'check_out' => 'required|date'

        ];
    }

    public function attributes()
    {
        return [
            'guest_name' => 'Tên',
            'phone' => 'Số điện thoại',
            'guest_email' => 'Địa chỉ email',
            'check_in' => 'Ngày Đến',
            'check_out' => 'Ngày Đi',


        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute Không được để trống',
            'min' => ':attribute quá ngắn',
            'email' => ':attribute phải là email',

        ];
    }
}
