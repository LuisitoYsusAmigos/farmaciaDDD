<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProveedorRequest extends FormRequest
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
    public function rules()
    {
        return [
            'idproveedor'=>'required|integer',
            'nombre_proveedor'=>'required|string|max:100',
            'email'=>'required|email',
            'direccion'=>'required|string|max:100',
            'ruc'=>'required|string|max:100'
        ];
    }

    public function messages()
    {
        return [
            'idproveedor.required' => 'El carnet de identidad del proveedor es requerido',
            'nombre_proveedor.required' => 'El nombre del proveedor es requerido',
            'email.required' => 'El email del proveedor es requerido',
            'direccion.required' => 'La direccion del proveedor es requerida',
            'ruc.required' => 'El RUC del proveedor es requerido'
        ];
    }
}
