<?php namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class ServiceValidator extends FormRequest
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
            'category_id' => 'required' , 
            'status' => 'nullable' , 
            'image' => 'nullable' , 
            'views' => 'nullable' , 
            'description_ar' => 'nullable' , 
            'description_en' => 'nullable' ,
            'metadata' => 'nullable' ,
            'sort' => 'nullable' ,
        ];
    }

    public function authorize(){
        return true;
    }

    public function message(){
        return [
            'title_ar.required' => 'Title Ar is required!' , 
            'title_en.required' => 'Title En is required!' , 
            'category_id.required' => 'Category is required!' , 
        ];
    }
}
