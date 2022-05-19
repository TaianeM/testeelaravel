<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules() {
        return [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'date_birth' => 'nullable',
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'email.required' => 'Email é necessário!',
            'email.email' => 'Digite o email corretamente!',
            'name.required' => 'Nome é necessário!',
            'password.required' => 'Senha é necessária!',
            'password.min' => 'Senha precisa de pelo menos 8 caracteres!',

        ];
    }
}
