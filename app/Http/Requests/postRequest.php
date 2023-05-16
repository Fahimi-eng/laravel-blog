<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class postRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'cover' => ['mimes:jpeg,jpg,png,gif','required'],
            'title' => ['required','unique:posts','max:255'],
            'category' => ['required'],
            'summary' => ['required']
        ];
    }
}
