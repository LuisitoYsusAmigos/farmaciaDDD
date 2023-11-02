<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
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
            //'id_cliente' => 'required|integer',
            'ci' => 'required|string',
            'apellido_cliente' => 'required|string',
            'nombre_cliente' => 'required|string',
            'email' => 'required|string',
            'telefono' => 'required|string',
            'referencia' => 'required|string',
            'direccion' => 'required|string'
        ];
    }

    public function messages()
    {
        return [
            //'id_cliente.required' => 'El Id es necesario',
            'ci.required' => 'El CI es requerido',
            'apellido_cliente.required' => 'Los apellidos son requeridos',
            'nombre_cliente.required' => 'Los nombres son requeridos',
            'email.required' => 'El email es requerido',
            'telefono.required' => 'El telefono es requerido',
            'referencia.required'=> 'La referencia es requerida',
            'direccion.required' => 'La direccion es requerida'
        ];
    }
}
