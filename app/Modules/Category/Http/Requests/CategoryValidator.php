<?php namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class CategoryValidator extends FormRequest
{
    public function rules(){
        return [
            'name_ar' => 'required' , 
            'name_en' => 'required' , 
            'status' => 'nullable' , 
            'parent_id' => 'nullable' , 
            'image' => 'nullable' , 
          ];
    }

    public function authorize(){
        return true;
    }    
    /**
     * Messages for creating a new Object
     *
     * @var array
     */
    public function messages(){
        return [
            'name_ar.required' => 'Name Ar is required!' , 
            'name_en.required' => 'Name En is required!' , 
            'status.required' => 'Status is required!' , 
        ];
    }
    
}
