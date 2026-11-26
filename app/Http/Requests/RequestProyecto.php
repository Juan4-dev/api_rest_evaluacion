<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RequestProyecto extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $isUpdate = $this->isMethod('PUT') || $this->isMethod('PATCH');
        $proyectoId = $this->route('proyecto') ?? $this->route('id');

        return [
            
        ];
    }


    public function messages(): array
    {
        return [
        

        ];
    }
}