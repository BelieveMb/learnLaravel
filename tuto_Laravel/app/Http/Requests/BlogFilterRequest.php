<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogFilterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        //les req autorises
        // return false;
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
            //pour définir les règles de validation

            // 'title' => 'required|min:8',
            'title' => ['required','min:8'],
            'slug' =>  ['required', 'regex:/^[a-z0-9\-]+$/']
            //la règle de validation, min 8 caractères
        ];
    }

    // ou on peut créer une méthode qui génére le slug
    protected function prepareForValidation(){
        $this->merge([
            // 'slug' => $this->input('slug') ?: Str::slug($this->input('title'))
            //pour générer des slug à partir du title
            'slug' => 'on écriut un slug ppar défaut'
        ]);
    }
}
