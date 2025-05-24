<?php namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class ClientValidator extends FormRequest
{
    /**
     * Validation for creating a new Object
     *
     * @var array
     */
    
    public function rules(){
        return [
         'image' => 'required' , 
      'sort' => 'required' , 
      'status' => 'nullable' , 
      ];
    }

    public function authorize(){
        return true;
    }

    public function messages(){
        return [
      'image.required' => 'Image is required!' , 
        'sort.required' => 'Sort is required!' , 
        ];
    }
}
