<?php namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class CityValidator extends FormRequest
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
        'country_id' => 'required' , 
        'status' => 'nullable' , 
      ];
    }

    public function authorize(){
      return true;
    }

    public function messages(){
      return [
          'title_ar.required' => 'Title Ar is required!' , 
          'title_en.required' => 'Title En is required!' , 
          'country_id.required' => 'Country Id is required!' , 
        ];
    }
}
