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

            'path' => 'required'
        ];
    }

    public function prepareForValidation()
    {
        if ($this->titleUz) {
            $this->merge([
                'title_uz' => $this->titleUz
            ]);
        }
        if ($this->titleEn) {
            $this->merge([
                'title_uz' => $this->titleUz
            ]);
        }
        if ($this->titleRu) {
            $this->merge([
                'title_uz' => $this->titleUz
            ]);
        }
        if ($this->titleKr) {
            $this->merge([
                'title_uz' => $this->titleUz
            ]);
        }
    }
}
