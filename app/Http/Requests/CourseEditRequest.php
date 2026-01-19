<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseEditRequest extends FormRequest
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
            'pt' => 'required',
            'intensity' => 'required',
            'time' => 'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo richiede più di 3 caratteri',
            'pt.required' => 'Inserire il nome del Personal Trainer',
            'intensity.required' => "Inserire l'intensità",
            'time.required' => "Inserire la durata del corso"
        ];
    }
}
