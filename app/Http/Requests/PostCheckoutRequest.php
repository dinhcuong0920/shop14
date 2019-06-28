<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostCheckoutRequest extends FormRequest
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
            "full" => 'required',
            "address" => 'required',
            "mail" => 'required|email',
            "telephone" => 'required',
        ];
    }
    public function messages()
    {
        return [
            "full.required" => 'Họ tên không được để trống',
            "address.required" => 'Địa chỉ không được để trống',
            "mail.email" => 'Email không đúng đinh dạng',
            "mail.required" => 'Email không được để trống',
            "telephone.required" => 'Số điện thoại không được để trống',
        ];
    }
}