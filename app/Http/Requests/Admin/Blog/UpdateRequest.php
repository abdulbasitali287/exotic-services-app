<?php

namespace App\Http\Requests\Admin\Blog;

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
            'title' => 'required',
            'meta_description' => 'required',
            'body' => 'required',
            'blog_image' => 'file|max:10240',
        ];
    }

    public function sanitisedUpdate() : array
    {
        return [
            'title' => Str::lower($this->title),
            'slug' => Str::slug($this->title),
            'meta_description' => Str::lower($this->meta_description),
            'body' => $this->body,
            'status' => isset($this->status) ?? 0,
            'alt_text' => $this->alt_text
        ];
    }
}
