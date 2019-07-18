<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'username' => 'required|min:3|max:32',
            'password' => 'required',
            'fullname' => 'required|min:6|max:32',
        ];
    }
    public function messages()
    {
        return [
            'username.required' =>'Yều cầu nhập tên truy cập',
            'username.min'      =>'Yều cầu nhập lớn hơn 3 ký tự',
            'username.max'      =>'Yều cầu nhập nhơ hơn 32 ký tự',
            'password.required' =>'Yều cầu nhập mật khẩu',
            'fullname.required' =>'Yều cầu nhập tên đầy đủ',
            'fullname.min'      =>'Yều cầu nhập lớn hơn 6 ký tự',
            'fullname.max'      =>'Yều cầu nhập nhơ hơn 32 ký tự',
        ];
    }
}
