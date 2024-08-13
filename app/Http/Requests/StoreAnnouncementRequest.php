<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAnnouncementRequest extends FormRequest
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
            'descriptionUz' => 'nullable|max:300',
            'descriptionKr' => 'nullable|max:300',
            'descriptionEn' => 'nullable|max:300',
            'descriptionRu' => 'nullable|max:300'



        ];
    }


    public function prepareForValidation()
    {
        $data = [];

        if ($this->has('titleUz')) {
            $data['title_uz'] = $this->titleUz;
        }

        if ($this->has('titleEn')) {
            $data['title_en'] = $this->titleEn;
        }

        if ($this->has('titleRu')) {
            $data['title_ru'] = $this->titleRu;
        }

        if ($this->has('titleKr')) {
            $data['title_kr'] = $this->titleKr;
        }

        if ($this->has('descriptionUz')) {
            $data['description_uz'] = $this->descriptionUz;
        }

        if ($this->has('descriptionEn')) {
            $data['description_en'] = $this->descriptionEn;
        }

        if ($this->has('descriptionRu')) {
            $data['description_ru'] = $this->descriptionRu;
        }

        if ($this->has('descriptionKr')) {
            $data['description_kr'] = $this->descriptionKr;
        }

        if ($this->has('bodyUz')) {
            $data['body_uz'] = $this->bodyUz;
        }

        if ($this->has('bodyEn')) {
            $data['body_en'] = $this->bodyEn;
        }

        if ($this->has('bodyRu')) {
            $data['body_ru'] = $this->bodyRu;
        }

        if ($this->has('bodyKr')) {
            $data['body_kr'] = $this->bodyKr;
        }

        $this->merge($data);
    }
}
