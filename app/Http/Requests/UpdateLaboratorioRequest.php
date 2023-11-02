<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLaboratorioRequest extends FormRequest
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
            'id' => 'required',
            'nombre' => 'required|min:5',
        ];
    }

    public function messages()
    {
        return [
            'id.required' => 'ID es requerido',
            'nombre.required' => 'Nombre es requerido',
            'nombre.min' => 'El nombre debe tener al menos 5 letras'
        ];
    }
}
