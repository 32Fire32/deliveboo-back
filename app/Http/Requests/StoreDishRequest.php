<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDishRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string|max:150',
            'price' => 'required|decimal:2|gt:1',
            'description' => 'nullable|string',
            'img' => 'nullable|image|max:2048',
            'ingredients' => 'nullable|string',
            'description' => 'nullable|string',
            'visible' => 'required|boolean',
        ];
    }
}
