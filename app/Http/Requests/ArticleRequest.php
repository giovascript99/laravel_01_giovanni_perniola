<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'title' => 'required|min:3',
            'subtitle' => 'required',
            'body' => 'required',
            'img' => 'required|image'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo richiede più di 3 caratteri',
            'subtitle.required' => 'Inserire il sottotitolo',
            'body.required' => "Inserire il corpo dell'articolo",
            'img.required' => "L'immagine è obbligatoria",
            'img.image' => "Il file deve essere di tipo immagine"
        ];
    }
}
