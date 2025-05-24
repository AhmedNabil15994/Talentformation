<?php namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JobApplicationRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'first_name'            => 'required|string|min:3',
            'last_name'            => 'required|string|min:3',
            'phone'              => 'required|numeric',
            'email'               => 'required|email',
            'file'                  => 'required',
            'designation'             => 'required|array',
            'company_name'                  => 'required|array',
            'work_from'                  => 'required|array',
            'work_to'                  => 'required|array',
            'expected_salary'                  => 'required',
            'current_salary'                  => 'required',
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
            'first_name.required'           =>   __('Frontend::home.pages.submit_cv.validations.first_name.required'),
            'first_name.string'             =>   __('Frontend::home.pages.submit_cv.validations.first_name.string'),
            'first_name.min'                =>   __('Frontend::home.pages.submit_cv.validations.first_name.min'),
            'last_name.required'           =>   __('Frontend::home.pages.submit_cv.validations.last_name.required'),
            'last_name.string'             =>   __('Frontend::home.pages.submit_cv.validations.last_name.string'),
            'last_name.min'                =>   __('Frontend::home.pages.submit_cv.validations.last_name.min'),
            'phone.required'             =>   __('Frontend::home.pages.submit_cv.validations.mobile.required'),
            'phone.numeric'              =>   __('Frontend::home.pages.submit_cv.validations.mobile.numeric'),
            'email.required'              =>   __('Frontend::home.pages.submit_cv.validations.email.required'),
            'email.email'                 =>   __('Frontend::home.pages.submit_cv.validations.email.email'),
            'designation.required'            =>   __('Frontend::home.pages.submit_cv.validations.designation.required'),
            'designation.string'              =>   __('Frontend::home.pages.submit_cv.validations.designation.string'),
            'designation.min'                 =>   __('Frontend::home.pages.submit_cv.validations.designation.min'),
            'file.required'                 =>   __('Frontend::home.pages.submit_cv.validations.file.required'),

            'company_name.required'         =>   __('Frontend::home.pages.submit_cv.validations.company_name.required'),
            'work_from.required'            =>   __('Frontend::home.pages.submit_cv.validations.work_from.required'),
            'work_to.required'              =>   __('Frontend::home.pages.submit_cv.validations.work_to.required'),
            'expected_salary.required'      =>   __('Frontend::home.pages.submit_cv.validations.expected_salary.required'),
            'current_salary.required'       =>   __('Frontend::home.pages.submit_cv.validations.current_salary.required'),

        ];
    }
}
