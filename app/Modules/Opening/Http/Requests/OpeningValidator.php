<?php namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class OpeningValidator extends FormRequest
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
            'brief_ar' => 'required' , 
            'brief_en' => 'required' , 
            'status' => 'nullable' , 
            'description_en' => 'nullable' , 
            'description_ar' => 'nullable' , 
            'job_details' => 'array' , 
            'job_details.location.ar' => 'required' , 
            'job_details.location.en' => 'required' , 
            'job_details.qualifications.ar' => 'required' , 
            'job_details.qualifications.en' => 'required' , 
            'job_details.career_level.ar' => 'required' , 
            'job_details.career_level.en' => 'required' , 
            'job_details.salary.ar' => 'required' , 
            'job_details.salary.en' => 'required' , 
            'job_details.nationality.ar' => 'nullable' , 
            'job_details.nationality.en' => 'nullable' , 
            'job_details.language.ar' => 'required' , 
            'job_details.language.en' => 'required' , 
            'job_details.job_status' => 'required' , 
      ];
    }

    public function authorize(){
        return true;
    }

    public function messages(){
        return [
            'title_ar.required' => 'Title Ar is required!' , 
            'title_en.required' => 'Title En is required!' , 
            'brief_ar.required' => 'Brief Ar is required!' , 
            'brief_en.required' => 'Brief En is required!' , 
        ];
    }
}
