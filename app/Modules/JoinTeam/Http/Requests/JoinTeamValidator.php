<?php namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class JoinTeamValidator extends FormRequest
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
          'designation' => 'required' , 
          'status' => 'nullable' , 
          'file' => 'nullable' , 
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
        ];
    }
}
