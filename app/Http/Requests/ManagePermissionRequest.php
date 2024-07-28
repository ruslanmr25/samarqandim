<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManagePermissionRequest extends FormRequest
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
            'permissions'=>'required|array',
            'permissions.*' => 'required|integer|exists:permissions,id',
            'userId' => 'required|exists:users,id'
        ];
    }
}
