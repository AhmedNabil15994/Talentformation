<?php namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class TestimonialValidator extends FormRequest
{
    /**
     * Validation for creating a new Object
     *
     * @var array
     */
    
    public function rules(){
        return [
         'name' => 'required' , 
      'description' => 'required' , 
      'position' => 'required' , 
      'status' => 'nullable' , 
      ];
    }

    public function authorize(){
        return true;
    }

    public function messages(){
        return [
      'name.required' => 'Name is required!' , 
        'description.required' => 'Description is required!' , 
        'position.required' => 'Position is required!' , 
        ];
    }
}
