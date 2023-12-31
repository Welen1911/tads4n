<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioUpdate extends FormRequest
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
            'nome' => 'required|string|max:100|min:2',
            'email' => 'required|string|email',
            'celular' => 'required|string|max:15',
            'telfixo' => 'required|string|max:15',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Preencha o campo nome!',
            'email.required' => 'Preencha o campo email!',
            'senha.required' => 'Preencha o campo senha!',
            'celular.required' => 'Preencha o campo celular!',
            'telfixo.required' => 'Preencha o campo fixo!',
        ];
    }
}
