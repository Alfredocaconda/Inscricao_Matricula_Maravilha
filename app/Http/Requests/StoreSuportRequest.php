<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        //rules->regras
        $rules=[
            //Para poder validar
            'objectivo'=>'required|min:3|max:255|unique:suports',
            'informacoes'=>[
                'required',
                'min:3',
                'max:10000'
            ],
        ];
        //condicao para mudar para o update
        if ($this->method()==='PUT') {
            # code...
            $rules['objectivo']=[
                'required',
                'min:3',
                'max:255',
                //uma das formas de validar os campos unicos
                //"unique:suports,objectivo,{$this->id},id"
                //validando o campo unico
                Rule::unique('suports')->ignore($this->id),
            ];
        } else {
            # code...
        }

        return $rules;
    }
}
