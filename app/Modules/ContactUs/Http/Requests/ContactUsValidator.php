<?php namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class ContactUsValidator extends EntityValidator implements ValidationInterface
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
          'message' => 'required' , 
          'status' => 'required' , 
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
            'name.required' => 'Name is required!' , 
            'email.required' => 'Email is required!' , 
            'phone.required' => 'Phone is required!' , 
            'message.required' => 'Message is required!' , 
            'status.required' => 'Status is required!' , 
        ];
    }
    
}
