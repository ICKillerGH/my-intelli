<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
            'title' => ['required', 'max:255'],
            'isbn' => ['required', 'unique:books'],
            'front_page' => ['required', 'image'],
            'synopsis' => ['required'],
            'number_of_pages' => ['required', 'integer', 'min:1'],
            'published_at' => ['required', 'date_format:Y-m-d'],
            'author_id' => ['required', 'exists:authors,id'],
        ];
    }
}
