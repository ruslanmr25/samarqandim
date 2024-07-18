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
            // 'nameEn' => 'required|string',
            // 'nameUz' => 'required|string',
            // 'nameRu' => 'required|string',
            // 'nameKr' => 'required|string',
            'level' => 'required|integer',
            'parentId' => 'required_unless:level,1|exists:menus,id',
            'path' => 'required|unique:menus,path'


        ];
    }


    public function prepareForValidation()
    {
        $this->merge([

            'name_en' => $this->nameEn,
            'name_uz' => $this->nameUz,
            'name_ru' => $this->nameRu,
            'name_kr' => $this->nameKr,
        ]);
    }
}
