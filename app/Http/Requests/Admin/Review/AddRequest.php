<?php

namespace App\Http\Requests\Admin\Review;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
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
            'slug' => 'required',
            'rating' => 'required',
            'review' => 'required',
        ];
    }

    public function sanitisedStore() : array {
        return [
            'name' => $this->name,
            'slug' => $this->slug,
            'rating' => $this->rating,
            'review' => $this->review,
        ];
    }
}
