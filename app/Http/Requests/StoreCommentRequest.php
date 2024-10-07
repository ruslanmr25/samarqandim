<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
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
            "imagePath" => "required|string"
        ];
    }

    public function prepareForValidation(): void
    {
        $data = [

            "person_uz" => $this->personUz,
            'person_en' => $this->personEn,
            'person_ru' => $this->personRu,

            'body_uz' => $this->bodyUz,
            'body_en' => $this->bodyEn,
            'body_ru' => $this->bodyRu,


            "description_uz" => $this->descriptionUz,
            "description_ru" => $this->descriptionRu,

            "description_en" => $this->descriptionEn,

            "image_path" => $this->imagePath,



        ];

        $filteredData = array_filter($data, function ($value): bool {
            return !is_null($value);
        });

        $this->merge($filteredData);
    }
}
