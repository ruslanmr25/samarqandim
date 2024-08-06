<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
}
