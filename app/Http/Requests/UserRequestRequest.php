<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequestRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|max:255|email',
            'phone_number' => 'required',
            'request_type' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Username field is empty.',
            'last_name.required' => 'Username field is empty.',
            'email.required' => 'Email field is empty.',
            'email.unique' => 'Email already exist.',
            'email.email' => 'Email is invalid.',
            'email.max' => 'Email field is should not be more than 225 characters',
            'phone_number.required' => 'Phone Number field is empty.',
            'phone_number.exists' => 'Phone Number is invalid.',
            'phone_number.max' => 'Phone Number field is should not be more than 225 characters',
            'request_type.required' => 'request_type field is empty.',
        ];
    }
}
