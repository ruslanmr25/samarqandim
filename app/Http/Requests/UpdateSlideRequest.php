<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSlideRequest extends FormRequest
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
            //
        ];
    }


    public function prepareForValidation()
    {
        if ($this->titleUz) {
            $this->merge([
                'title_uz' => $this->titleUz
            ]);
        }
        if ($this->titleEn) {
            $this->merge([
                'title_uz' => $this->titleUz
            ]);
        }
        if ($this->titleRu) {
            $this->merge([
                'title_uz' => $this->titleUz
            ]);
        }
        if ($this->titleKr) {
            $this->merge([
                'title_uz' => $this->titleUz
            ]);
        }
    }
}
