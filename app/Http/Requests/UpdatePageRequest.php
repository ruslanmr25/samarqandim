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
            "menu" => 'required|exists:menus,path',
            'titleUz' => 'required'
        ];
    }


    public function prepareForValidation()
    {
        $data = [

            'menu_id' => $this->menuId,
            'title_uz' => $this->titleUz,
            'title_en' => $this->titleEn,
            'title_ru' => $this->titleRu,
            'title_kr' => $this->titleKr,
            'body_uz' => $this->bodyUz,
            'body_en' => $this->bodyEn,
            'body_ru' => $this->bodyRu,
            'body_kr' => $this->bodyKr,
        ];
        $filteredData = array_filter($data, function ($value) {
            return !is_null($value);
        });

        $this->merge($filteredData);
    }
}
