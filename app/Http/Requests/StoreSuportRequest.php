<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSuportRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        //retorna o valor verdadeiro
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
            //Para poder validar
            'objectivo'=>'required|min:3|max:255|unique:suports',
            'informacoes'=>[
                'required',
                'min:3',
                'max:10000'
            ],
        ];
    }
}
