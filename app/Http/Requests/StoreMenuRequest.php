<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMenuRequest extends FormRequest
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
            'nameEn' => 'nullable|string',
            'nameUz' => 'required|string',
            'nameRu' => 'nullable|string',
            'nameKr' => 'nullable|string',
            'level' => 'required|integer|min:1',
            'parentId' => 'required_unless:level,1|exists:menus,id',
            'path' => "required|unique:menus,path",
            'externalLink' => 'nullable|string',
            'priority' => 'required|int'


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
