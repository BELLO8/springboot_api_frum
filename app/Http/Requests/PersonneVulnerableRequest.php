<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonneVulnerableRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            "nom"=> 'required|max:255',
            "prenom"=> 'required|max:255',
            "adresse"=> 'required|max:255',
            "telephone"=> 'required|max:10',
            "age"=> 'required|numeric'
        ];
    }
}
