<?php

namespace App\Http\Requests\Admin\Pages;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

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
            'name' => 'required',
            'heading' => 'required',
            'content' => 'required',
            'images.*' => 'image|mimes:png,jpg,jpeg|max:10240'
        ];
    }

    public function messages(): array
    {
        return [
            'images.*.mimes' => 'images must be of type png,jpeg,jpg...!',
            'images.*.max' => 'image size should be less than 10MB...!',
        ];
    }

    public function sanitisedUpdate() : array {
        return [
            'name' => Str::lower($this->name),
            'slug' => Str::lower(Str::slug($this->name)),
            'heading' => $this->heading ,
            'sub_heading' => $this->sub_heading,
            'description' => $this->description,
            'content' => $this->content,
            'alt_text' => $this->alt_text,
        ];
    }
}
