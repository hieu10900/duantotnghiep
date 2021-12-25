<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class RequestService extends FormRequest
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
            'name' => 'required|min:1',
            'quantity' => 'required|',
            'price' => 'required|',


        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Tên Dịch Vụ',
            'price' => 'Giá',
            'quantity' => 'Số Lượng ',

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
