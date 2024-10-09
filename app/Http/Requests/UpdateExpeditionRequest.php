<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateExpeditionRequest extends FormRequest
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

            'imagePath' => 'required|string',
            'titleUz' => 'required',
            "descriptionUz" => 'required|max:500'


        ];
    }



    public function prepareForValidation()
    {
        $data = [

            "title_uz" => $this->titleUz,
            'title_en' => $this->titleEn,
            'title_ru' => $this->titleRu,

            'body_uz' => $this->bodyUz,
            'body_en' => $this->bodyEn,
            'body_ru' => $this->bodyRu,


            "description_uz" => $this->descriptionUz,
            "description_ru" => $this->descriptionRu,

            "description_en" => $this->descriptionEn,




        ];

        $filteredData = array_filter($data, function ($value) {
            return !is_null($value);
        });

        $this->merge($filteredData);
    }
}
