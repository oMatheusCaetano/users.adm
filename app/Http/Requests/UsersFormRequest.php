<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|min:2',
            'cpf' => 'required|min:11|max:14',
            'email' => 'email:rfc,dns',
            'password' => 'required|min:8'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo \':attribute\' é obrigatório',
            'name.required' => 'O campo \'nome\' é obrigatório',
            'name.min' => 'O campo \'nome\' precisa ter pelo menos 2 caracteres',
            'cpf.min' => 'O campo \'cpf\' precisa ter pelo menos 11 caracteres',
            'cpf.max' => 'O campo \'cpf\' pode ter no máximo 14 caracteres',
            'password.required' => 'O campo \'senha\' é obrigatório',
            'password.min' => 'O campo \'senha\' precisa ter pelo menos 8 caracteres',
            'email.email' => 'O \'email\' precisa ser um endereço válido'
        ];
    }
}
