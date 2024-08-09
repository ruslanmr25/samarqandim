<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
{
    /**
     *  Checking who is update user and any user has no permission to change isAdmin
     */
    public function authorize(): bool
    {
        $user = $this->user;
        $sessionUser = $this->user();
        return $sessionUser->roles()->first() && $user->id != $sessionUser->id;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        $userId = $this->user->id;
        return [

            'username' => "required|string|unique:users,username,{$userId},id",
            'email' => "required|string|email|unique:users,email,{$userId},id",
            'fullname' => 'required|string',
            'password' => 'required|min:6',
            'permissions' => 'required|array',
            'permissions.*' => 'required|int|exists:permissions,id'
        ];
    }
}
