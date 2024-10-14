<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGalleryRequest extends FormRequest
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

            "titleUz" => "required",

            "contentPath" => "required|string",
            "type" => "required|in:photo,video"
        ];
    }


    public function prepareForValidation()
    {
        $data = [

            "title_uz" => $this->titleUz,
            'title_en' => $this->titleEn,
            'title_ru' => $this->titleRu,
            "content_path" => $this->contentPath,


        ];

        $filteredData = array_filter($data, function ($value) {
            return !is_null($value);
        });

        $this->merge($filteredData);
    }

    public function messages()
    {
        return [
            "type.in" => "type must be photo or video"
        ];
    }
}