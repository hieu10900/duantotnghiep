<?php

namespace App\Http\Requests\Clients;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequesr extends FormRequest
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
            'name' =>'required|min:1',
            'phone'=>'required||min:10|max:11',
            'email' => 'required|email',
            'check_in'=>'required|date',
            'check_out'=>'required|date'

        ];
    }
    public function attributes(){
        return [
            'name' =>'Tên',
            'phone'=>'Số điện thoại',
            'email' => 'Địa chỉ email',
            'check_in'=>'Ngày Đến',
            'check_out'=>'Ngày Đi',


        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute Không được để trống',
            'min' => ':attribute không hợp lệ',
            'date' => ':attribute không hợp lệ',
            'max' =>":attribute không hợp lệ",
            'email'=>':attribute phải là email',
            'numeric'=>':attributeđịnh dạng số điện thoại sai',

        ];
    }
}
