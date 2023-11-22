<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioStore extends FormRequest
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
            'senha' => 'required|string',
            'celular' => 'required|string|max:15',
            'telfixo' => 'required|string|max:15',
            'logradouro' => 'required|string|max:250',
            'numero' => 'required|int|max:250',
        ];
    }
}
