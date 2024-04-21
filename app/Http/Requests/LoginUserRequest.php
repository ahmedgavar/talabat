<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            //
            'email' => 'required |email ',
            'password' => 'required|min:8',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'الايميل  مطلوب',
            'email.email' => 'يجب أن يكون ايميلا',
            'password.required' => 'أدخل الرقم السري  ',
            'password.min' => 'يجب ادخال 8 حروف علي الأقل',
        ];
    }
}
