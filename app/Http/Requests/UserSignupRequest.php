<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserSignupRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role' => 'required|in:user,admin',
            'profile_image' => 'sometimes|mimes:jpeg,png,jpg,svg'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => "Please enter your name !!",
            'email.required' => "Please enter your email !!",
            'email.email' => "Please enter a valid email !!",
            'email.unique' => "The email has already been taken !!" , 
            'password' => "Please enter your password !!" , 
            'role.in' => "Please enter a valid role : admin or user !!" ,
            'profile_image.mimes' => "Please enter a valid image !!!"   
        ];
    }

    public function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json(['errors' => $validator->errors()], 422));
    }
}
