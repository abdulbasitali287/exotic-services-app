<?php

namespace App\Http\Requests\Admin\Service;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreRequest extends FormRequest
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
            'service_name' => 'required',
            'slug' => 'required',
            // 'service_type' => 'required',
            'sub_heading' => 'required',
            'navigation_name' => 'required',
            'feature_service' => 'required',
            'text_on_hover' => 'required',
            'service_banner' => 'required|file|mimes:png,jpg,jpeg,webp',
            'description' => 'required',
        ];
    }

    public function sanitisedStore() : array {
        return [
            'service_name' => $this->service_name,
            'sub_heading' => $this->sub_heading,
            'slug' => Str::slug($this->slug),
            // 'service_type' => $this->service_type,
            'navigation_name' => $this->navigation_name,
            'feature_service' => $this->feature_service ?? '0',
            'text_on_hover' => $this->text_on_hover,
            'description' => $this->description,
            'alt_text' => $this->alt_text,
        ];
    }
}
