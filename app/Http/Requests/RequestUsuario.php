<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RequestUsuario extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $isUpdate = $this->isMethod('PUT') || $this->isMethod('PATCH');
        $usuarioId = $this->route('usuario') ?? $this->route('id');

        return [
            'rol_id' => [
                $isUpdate ? 'sometimes' : 'required',
                'integer',
                'exists:roles,id'
            ],
            'name' => [
                $isUpdate ? 'sometimes' : 'required',
                'string',
                'max:150'
            ],
            'email' => [
                $isUpdate ? 'sometimes' : 'required',
                'email',
                'max:150',
                Rule::unique('usuarios', 'email')->ignore($usuarioId, 'id')
            ],
            'password' => [
                $isUpdate ? 'sometimes' : 'required',
                'string',
                'min:8'
            ],
        ];
    }


    public function messages(): array
    {
        return [
            'rol_id.required' => 'El rol es obligatorio.',
            'rol_id.integer' => 'El rol debe ser un número entero.',
            'rol_id.exists' => 'El rol seleccionado no existe en el sistema.',

            'name.required' => 'El nombre es obligatorio.',
            'name.string' => 'El nombre debe ser texto.',
            'name.max' => 'El nombre no puede exceder los 150 caracteres.',

            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'Debe proporcionar un correo electrónico válido.',
            'email.max' => 'El correo electrónico no puede exceder los 150 caracteres.',
            'email.unique' => 'Este correo electrónico ya está registrado.',

            'password.required' => 'La contraseña es obligatoria.',
            'password.string' => 'La contraseña debe ser texto.',
            'password.min' => 'La contraseña debe tener al menos 8 caracteres.',

        ];
    }
}



//rol_id
//name, email, email_verified_at, password y remebmer token