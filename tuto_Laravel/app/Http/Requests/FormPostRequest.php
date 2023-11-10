<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FormPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //user est permis d'accès
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
            
            // 'title' => 'required|min:8',
            'title' => ['required','min:8'],
            // 'slug' =>  ['required', 'regex:/^[a-z0-9\-]+$/', 'unique:posts'],
            'slug' =>  ['required', 'regex:/^[a-z0-9\-]+$/', Rule ::unique('posts')->ignore($this->route()->parameter('post'))],
            'content' => ['required']
            //la règle de validation, min 8 caractères
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'slug' => $this->input('slug') ?: \Str :: slug($this->input('title'))
            //genrer le slug
        ]);
    }
}
