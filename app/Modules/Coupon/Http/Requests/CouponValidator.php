<?php namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class CouponValidator extends FormRequest
{
    /**
     * Validation for creating a new Object
     *
     * @var array
     */
    public function rules(){
      return [
         'code' => 'required' , 
        'discount_type' => 'required' , 
        'discount_value' => 'required' , 
        'valid_until' => 'required' , 
        'status' => 'nullable' , 
        'valid_type' => 'nullable' , 
      ];
    }

    public function authorize(){
      return true;
    }

    public function messages(){
      return [
          'code.required' => 'Code is required!' , 
          'discount_type.required' => 'Discount Type is required!' , 
          'discount_value.required' => 'Discount Value is required!' , 
          'valid_until.required' => 'Valid Until is required!' , 
        ];
    }
}
