<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JoinTeamRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'name'            => 'required|string|min:3',
            'phone'              => 'required|numeric|digits_between:8,8',
            'email'               => 'required|email',
            'designation'             => 'required|string|min:10',
            'file'                  => 'required',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'name.required'           =>   __('Frontend::home.pages.join_team.validations.username.required'),
            'name.string'             =>   __('Frontend::home.pages.join_team.validations.username.string'),
            'name.min'                =>   __('Frontend::home.pages.join_team.validations.username.min'),
            'phone.required'             =>   __('Frontend::home.pages.join_team.validations.mobile.required'),
            'phone.numeric'              =>   __('Frontend::home.pages.join_team.validations.mobile.numeric'),
            'phone.digits_between'       =>   __('Frontend::home.pages.join_team.validations.mobile.digits_between'),
            'email.required'              =>   __('Frontend::home.pages.join_team.validations.email.required'),
            'email.email'                 =>   __('Frontend::home.pages.join_team.validations.email.email'),
            'designation.required'            =>   __('Frontend::home.pages.join_team.validations.designation.required'),
            'designation.string'              =>   __('Frontend::home.pages.join_team.validations.designation.string'),
            'designation.min'                 =>   __('Frontend::home.pages.join_team.validations.designation.min'),
            'file.required'                 =>   __('Frontend::home.pages.join_team.validations.file.required'),
        ];
    }
}
