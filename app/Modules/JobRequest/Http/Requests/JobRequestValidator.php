<?php namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class JobRequestValidator extends FormRequest
{
    /**
     * Validation for creating a new Object
     *
     * @var array
     */
    
    public function rules(){
        return [
            'name' => 'required' , 
            'email' => 'required' , 
            'phone' => 'required' , 
            'status' => 'nullable' ,
            'file' => 'nullable' ,
            'designation' => 'required|array' ,
            'company_name' => 'required|array' ,
            'work_from' => 'required|array' ,
            'work_to' => 'required|array' ,
            'current_salary' => 'required' , 
            'expected_salary' => 'required' , 
            'opening_id' => 'required|exists:openings,id' , 
      ];
    }

    public function authorize(){
        return true;
    }

    public function messages(){
        return [
            'name.required' => 'Name is required!' , 
            'email.required' => 'Email is required!' , 
            'phone.required' => 'Phone is required!' , 
            'designation.required' => 'Designation is required!' , 
            'opening_id.required' => 'Available Job is required!' , 
            'opening_id.exists' => "Available Job doesn't exist!" , 
            'designation.required' => 'Designation is required!' , 
        ];
    }
}
