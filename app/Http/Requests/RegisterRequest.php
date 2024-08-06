<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class RegisterRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'string|unique:users,username',
            'email' => 'required|string|email|unique:users,email',
            'fullname' => 'required|string',
            'password' => 'required|min:6',
            'permissions' => 'required|array',
            'permissions.*' => 'required|int|exists:permissions,id'
        ];
    }

    // public function prepareForValidation()
    // {
    //     'password'=Hash::make($this->password);
    // }
}
