<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsRequest extends FormRequest
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
            'message'             => 'required|string|min:10',
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
            'name.required'           =>   __('Frontend::home.pages.contact_us.validations.username.required'),
            'name.string'             =>   __('Frontend::home.pages.contact_us.validations.username.string'),
            'name.min'                =>   __('Frontend::home.pages.contact_us.validations.username.min'),
            'phone.required'             =>   __('Frontend::home.pages.contact_us.validations.mobile.required'),
            'phone.numeric'              =>   __('Frontend::home.pages.contact_us.validations.mobile.numeric'),
            'phone.digits_between'       =>   __('Frontend::home.pages.contact_us.validations.mobile.digits_between'),
            'email.required'              =>   __('Frontend::home.pages.contact_us.validations.email.required'),
            'email.email'                 =>   __('Frontend::home.pages.contact_us.validations.email.email'),
            'message.required'            =>   __('Frontend::home.pages.contact_us.validations.message.required'),
            'message.string'              =>   __('Frontend::home.pages.contact_us.validations.message.string'),
            'message.min'                 =>   __('Frontend::home.pages.contact_us.validations.message.min'),
        ];
    }
}
