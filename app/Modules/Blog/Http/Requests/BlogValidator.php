<?php namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class BlogValidator extends FormRequest
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
            'date' => 'required' , 
            'status' => 'nullable' , 
            'image' => 'nullable' , 
            'views' => 'nullable' , 
            'description_ar' => 'nullable' , 
            'description_en' => 'nullable' , 
            'category_id' => 'nullable' , 
        ];
    }

    public function authorize(){
        return true;
    }

    public function message(){
        return [
            'title_ar.required' => 'Title Ar is required!' , 
            'title_en.required' => 'Title En is required!' , 
            'date.required' => 'Date is required!' , 
        ];
    }
}
