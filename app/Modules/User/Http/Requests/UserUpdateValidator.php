<?php namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UserUpdateValidator extends FormRequest
{
    /**
     * Validation for creating a new Object
     *
     * @var array
     */
    // public function __construct(Factory $validator)
    // {
    //     parent::__construct($validator);
    //     $this->rules =[
    //         'email' => "required|unique:users,email" ,
    //         'name' => 'required' ,
    //         'role_id' => 'required' ,
    //         'password' => 'nullable|min:6|same:password_confirmation',
    //         'password_confirmation' => 'nullable|min:6',
    //         'mobile' => 'required|unique:users,mobile' ,
    //         'extra_permissions' => 'nullable' ,
    //         'status' => 'integer|nullable' ,
    //         'image' => 'nullable' ,
    //     ];

    //     $this->messages = [
    //         'email.required' => trans('User::user.form.validations.email_required') ,
    //         'email.email' => trans('User::user.form.validations.email_email') ,
    //         'name.required' => trans('User::user.form.validations.name_required') ,
    //         'mobile.required' => trans('User::user.form.validations.mobile_required') ,
    //         'mobile.unique' => trans('User::user.form.validations.mobile_unique') ,
    //         'role_id.required' => trans('User::user.form.validations.role_id_unique') ,
    //         'password.confirmed' => trans('User::user.form.validations.password_confirmed') ,
    //         'password.min' => trans('User::user.form.validations.password_min') ,
    //     ];
    // }
    // 
    public function rules(){
        return [
            'email' => "required|unique:users,email,".$this->id ,
            'name' => 'required' ,
            'role_id' => 'required' ,
            'password' => 'nullable|min:6|same:password_confirmation',
            'password_confirmation' => 'nullable|min:6',
            'mobile' => 'required|unique:users,mobile,'.$this->id ,
            'extra_permissions' => 'nullable' ,
            'status' => 'integer|nullable' ,
            'image' => 'nullable' ,
        ];
    }

    public function authorize(){
        return true;
    }

    public function messages(){
        return [
            'email.required' => trans('User::user.form.validations.email_required') ,
            'email.email' => trans('User::user.form.validations.email_email') ,
            'name.required' => trans('User::user.form.validations.name_required') ,
            'mobile.required' => trans('User::user.form.validations.mobile_required') ,
            'mobile.unique' => trans('User::user.form.validations.mobile_unique') ,
            'role_id.required' => trans('User::user.form.validations.role_id_unique') ,
            'password.confirmed' => trans('User::user.form.validations.password_confirmed') ,
            'password.min' => trans('User::user.form.validations.password_min') ,
        ];
    }
}
