<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreStudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Authorization is allowed for all users
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => 'string|required|max:255',
            'email' => 'required|email|unique:students|max:255',
            'roll_number' => 'required|unique:students',
            'year_enrolled' => 'required|integer|between:2021,2024',
            'year_passing' => 'required|integer|between:2025,2028',
            'branch' => 'required|in:Computer Science and Engineering,Mechanical Engineering,Civil Engineering,Artificial Intelligence',
            'password' => ['required', Password::min(8)],
        ];
    }

    /**
     * Customize error messages.
     */
    public function messages()
    {
        return [
            'email.unique' => 'This email is already registered.',
            'roll_number.unique' => 'This roll number is already taken.',
            'branch.in' => 'Please select a valid branch.',
        ];
    }
}
