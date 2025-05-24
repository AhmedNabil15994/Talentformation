<?php namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class PageValidator extends FormRequest
{
    /**
     * Validation for creating a new Object
     *
     * @var array
     */
    public function rules(){
        return [
            'name_ar' => 'required' , 
            'name_en' => 'required' , 
            'status' => 'nullable' , 
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
        ];
    }
    
}
