<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GameStoreRequest extends FormRequest
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
            "title" =>"required|max:100|min:2",
            "description" => "required|min:10|string",
            "price" => "required|max:999|decimal:0,2",
            "img" => "image"
        ];
    }

    public function messages(){
        return[
            "title.required" => "Campo Obbligatorio",
            "title.max" => "Titolo massimo 100 caratteri",
            "title.min" => "Titolo minimo 2 caratteri",
            "description.required" => "Campo Obbligatorio",
            "description.min" => "Minimo 10 caratteri",
            "price.required" => "Campo Obbligatorio",
            "price.max" => "Massimo $ 999",
            "price.decimal" => "la cifra deve contenere massimo due cifre decimali separate da un punto alla fine del intero"
        ];
    }
}
