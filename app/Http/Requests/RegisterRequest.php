<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'txtFirstName' => 'required|max:255',
            'txtLastName' => 'required|max:255',
            'txtPhoneNumber' => 'required',
            'txtEmailAddress' => 'required|unique:users,email|max:255',
            'txtPassword' => 'required|min:8',
            'txtConfirmPassword' => 'required_with:txtPassword|same:txtPassword|min:8'
        ];
    }

}
