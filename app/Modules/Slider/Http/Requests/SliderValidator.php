<?php namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class SliderValidator extends FormRequest
{
    /**
     * Validation for creating a new Object
     *
     * @var array
     */
    public function rules(){
        return [
            'title_ar' => 'required' , 
            'title_en' => 'required' , 
            'page_id' => 'required' , 
            'status' => 'nullable' , 
            'image' => 'nullable' , 
            'description_ar' => 'nullable' , 
            'description_en' => 'nullable' , 
            'metadata' => 'nullable' , 
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
            'title_ar.required' => 'Title Ar is required!' , 
            'title_en.required' => 'Title En is required!' , 
            'page_id.required' => 'Page is required!' , 
        ];
    }
    
}