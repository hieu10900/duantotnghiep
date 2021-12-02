<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RequestDiscount extends FormRequest
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
            'code' => 'required|',
            'quantity' => 'required|',
            'discount_rate' => 'required|',
            'status' => 'required|'

        ];
    }

    public function attributes()
    {
        return [
            'full_name' => 'Tên khuyến mại',
            'code' => 'Mã Code',
            'quantity' => 'Số Lượng Code',
            'discount_rate' => 'Mức Khuyến Mại',
            'status' => 'Trạng Thái',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute Không được để trống',
            'min' => ':attribute quá ngắn',


        ];
    }
}
