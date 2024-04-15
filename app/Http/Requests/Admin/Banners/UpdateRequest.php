<?php

namespace App\Http\Requests\Admin\Banners;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'alt_text' => 'required',
            'banner_image.*' => 'image',
        ];
    }

    public function messages(): array
    {
        return [
            'banner_image.*.image' => 'file must be of type image...!',
            // 'banner_image.*.mimes' => 'images must be of type png,jpeg,jpg...!',
            // 'banner_image.*.max' => 'image size should be less than 10MB...!',
        ];
    }

    public function sanitisedUpdate(): array {
        return [
            'title' => strtoupper($this->title),
            'description' => $this->description,
            'alt_text' => $this->alt_text
        ];
    }
}
