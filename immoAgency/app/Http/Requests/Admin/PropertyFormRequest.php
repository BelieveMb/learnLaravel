<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PropertyFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
        //on donne l'autorisation
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //on place les règles
            'title' => ['required','min:8'],
            'description' => ['required','min:8'],
            'surface' => ['required','integer','min:10'],
            'rooms' => ['required','integer','min:1'],
            'bedrooms' => ['required','integer','min:0'],
            'floor' => ['required','integer','min:0'],
            'price' => ['required','integer','min:0'],
            'city' => ['required','min:8'],
            'adress' => ['required','min:8'],
            'postal_code' => ['required','min:8'],
            'sold' => ['required','boolean'],
        ];
    }
}
