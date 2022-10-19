<?php

namespace App\Http\Requests\Mneu;

use Illuminate\Foundation\Http\FormRequest;

class MenuRequest extends FormRequest
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
            'menu_name' => ['required'],
            'subcategory' => ['required'],
            'turn' => ['required', 'numeric'],
            'price' => ['required','numeric'],
        ];
    }
}
