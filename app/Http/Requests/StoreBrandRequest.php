<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBrandRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => 'required|min:2',

        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Không Để Trống',
            'name.min' => 'Trên 2 kí tự',
        ];
    }
}
