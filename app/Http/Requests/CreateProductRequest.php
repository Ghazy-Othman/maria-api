<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;


class CreateProductRequest extends FormRequest
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
            'product_name' => "required" ,
            'cost' => "required|integer",
            'description' => "required",
            'discount' => "sometimes|decimal:0,2",
            'category_id' => "required" , 
            'product_image' => "sometimes|nullable|mimes:jpeg,png,jpg,svg" ,
        ];
    }


    
    public function messages() : array
    {
        return [ 
            'product_name.required' => "Please enter product name !!" , 
            'cost.required' => "Please enter products cost !!" ,
            'cost.integer' => "Cost have to be integer!!" , 
            'description.required' => "Please enter product description !!" , 
            'discount.integer' => "Discount have to be integer!!" , 
            'category_id.required' => "Please enter category id !!" , 
            'product_image.mimes' => "Please enter a valid image !!" , 
        ] ;
    }

    public function failedValidation(Validator $validator) { 
        throw new HttpResponseException(response()->json(['errors' => $validator->errors() ] , 422)) ;
    }


}
