<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UpdateUserRequest extends FormRequest
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
            "user_new_name" => 'sometimes' ,
            'new_profile_image' => 'sometimes|mimes:jpeg,png,jpg,svg',
            'no_image' => 'sometimes|in:true'
        ];
    }


    
    public function messages() : array
    {
        return [
            'new_profile_image.mimes' => "Please enter a valid image !!!" ,
            'no_image.in' => "Please enter true value !!"
        ] ;
    }

    
    public function failedValidation(Validator $validator) { 
        throw new HttpResponseException(response()->json(['errors' => $validator->errors() ], 422)) ;
    }


}
