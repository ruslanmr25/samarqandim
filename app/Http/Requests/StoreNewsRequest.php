<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * @bodyParam titleEn optional string. No-example
 * @bodyParam titleRu optional string. No-example
 * @bodyParam titleKr optional string. No-example
 * @bodyParam titleUz optional string. No-example
 * @bodyParam bodyEn optional string. No-example
 * @bodyParam bodyRu optional string. No-example
 * @bodyParam bodyUz optional string. No-example
 * @bodyParam bodyKr optional string. No-example
 * @bodyParam path required string Main image path. No-example
 * @bodyParam categoryId required int The type of news. No-example
 */
class StoreNewsRequest extends FormRequest
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
            'categoryId' => 'required|exists:news_categories,id|integer',
            'imagePath' => 'required|string',
            'titleUz' => 'required'


        ];
    }



    public function prepareForValidation()
    {
        $data = [

            "title_uz" => $this->titleUz,
            'title_en' => $this->titleEn,
            'title_ru' => $this->titleRu,
            'title_kr' => $this->titleKr,
            'body_uz' => $this->bodyUz,
            'body_en' => $this->bodyEn,
            'body_ru' => $this->bodyRu,
            'body_kr' => $this->bodyKr,
            'category_id' => $this->categoryId

        ];

        $filteredData = array_filter($data, function ($value) {
            return !is_null($value);
        });

        $this->merge($filteredData);
    }
}
