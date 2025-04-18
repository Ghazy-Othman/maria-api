<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
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
            'new_product_name' => "sometimes" ,
            'new_cost' => "sometimes|integer",
            'new_description' => "sometimes",
            'new_discount' => "sometimes|decimal:1,2",
            'new_category_id' => "sometimes" , 
            'new_product_image' => "sometimes|mimes:jpeg,png,jpg,svg" ,
            'no_image' => 'sometimes|in:true'
        ];
    }


    
    public function messages() : array
    {
        return [ 
            'new_cost.integer' => "Cost have to be integer!!" , 
            'new_discount.integer' => "Discount have to be integer!!" , 
            'new_product_image.mimes' => "Please enter a valid image !!" , 
            'no_image.in' => "Please enter true value for this field"
        ] ;
    }

    
    public function failedValidation(Validator $validator) { 
        throw new HttpResponseException(response()->json(['errors' => $validator->errors() ] , 422)) ;
    }



}
