<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePageRequest extends FormRequest
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
        $data = [
            'name_en' => $this->nameEn,
            'name_uz' => $this->nameUz,
            'name_ru' => $this->nameRu,
            'name_kr' => $this->nameKr,
            'level' => $this->level,
            'parent_id' => $this->parentId,
            'path' => $this->path,
            'external_link' => $this->externalLink,
        ];

        $filteredData = array_filter($data, function ($value) {
            return !is_null($value);
        });

        $this->merge($filteredData);
    }
}
