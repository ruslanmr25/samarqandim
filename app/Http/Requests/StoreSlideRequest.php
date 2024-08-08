<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 *  * @bodyParam titleEn optional string. No-example
 * @bodyParam titleRu optional string. No-example
 * @bodyParam titleKr optional string. No-example
 * @bodyParam titleUz optional string. No-example
 * @bodyParam path string required The path of image. No-example
 */
class StoreSlideRequest extends FormRequest
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

            'imagePath' => 'required'
        ];
    }

    public function prepareForValidation()
    {
        $this->merge([

            "title_uz" => $this->titleUz,
            'title_en' => $this->titleEn,
            'title_ru' => $this->titleRu,
            'title_kr' => $this->titleKr,
            'description_uz' => $this->descriptionUz,
            'description_en' => $this->descriptionEn,
            'description_ru' => $this->descriptionRu,
            'description_kr' => $this->descriptionKr,


        ]);
    }
}
