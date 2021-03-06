<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostEditProductRequest extends FormRequest
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
            "product_code" => 'required|unique:product,code,'.$this->id.',id',
            "product_name" => 'required',
            "product_price" => 'required',
        ];
    }
    public function messages()
    {
        return [
            "product_code.required" => 'Mã sản phẩm không được để trống',
            "product_code.unique" => 'Mã sản phẩm đã bị trùng!',
            "product_name.required" => 'Tên sản phẩm không được để trống',
            "product_price.required" => 'Giá sản phẩm không được để trống',
        ];
    }
}

