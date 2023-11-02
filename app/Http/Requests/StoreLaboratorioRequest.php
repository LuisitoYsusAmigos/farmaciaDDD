<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLaboratorioRequest extends FormRequest
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
            'id_laboratorio' => 'required',
            'nombre_laboratorio' => 'required|min:5',
        ];
    }

    public function messages()
    {
        return [
            'id_laboratorio.required' => 'ID es requerido',
            'nombre_laboratorio.required' => 'Nombre es requerido',
            'nombre.min' => 'El nombre debe tener al menos 5 letras'
        ];
    }
}