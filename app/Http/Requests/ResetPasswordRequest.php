<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class ResetPasswordRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'email' => 'required|email' , 
            'new_password' => 'required' , 
            'confirm_new_password' => 'required|confirmed:new_password'
        ];
    }

    public function messages(): array
    {
        return [
            'email.required' => "Please enter your email !!",
            'email.email' => "Please enter a valid email !!",
            'new_password.required' => "Please enter new password !!" , 
            'confirm_new_password.required' => "Please enter confirmed password !!" , 
            'confirm_new_password.confirmed' => "Password and confirmed password are not equal !!" , 
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()], 422));
    }

}
