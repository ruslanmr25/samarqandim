<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAnnouncementRequest extends FormRequest
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
            'status' => 'boolean',
            'imagePath' => 'required|string',
        ];
    }



    public function prepareForValidation()
    {
        $data = [
            'title_uz' => $this->titleUz,
            'title_en' => $this->titleEn,
            'title_ru' => $this->titleRu,
            'title_kr' => $this->titleKr,
            'description_uz' => $this->descriptionUz,
            'description_en' => $this->descriptionEn,
            'description_ru' => $this->descriptionRu,
            'description_kr' => $this->descriptionKr,
            'body_uz' => $this->bodyUz,
            'body_en' => $this->bodyEn,
            'body_ru' => $this->bodyRu,
            'body_kr' => $this->bodyKr,

        ];

        // Null qiymatlarni olib tashlash
        $filteredData = array_filter($data, function ($value) {
            return !is_null($value);
        });

        $this->merge($filteredData);
    }
}
