<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductoRequest extends FormRequest
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
            'nombre_producto' => 'required|min:5',
            'stock' => 'required|min:5',
            'stock_minimo' => 'required|min:5',
            'presentacion' => 'required|min:5',
            'medida' => 'required|min:5',
            'restriccion_venta' => 'required|min:5',
            'descripcion' => 'required|min:5',
            'locacion' => 'required|min:5',
            'codigo_barras' => 'required|min:5',
            'id_laboratorio' => 'required',
            'id_categoria' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'id.required' => 'El id es requerido',
            'nombre_producto.required' => 'Espacio sin completar',
            'stock.required' => 'Espacio sin completar',
            'stock_minimo.required' => 'Espacio sin completar',
            'presentacion.required' => 'Espacio sin completar',
            'medida.required' => 'Espacio sin completar',
            'restriccion_venta.required' => 'Espacio sin completar',
            'descripcion.required' => 'Espacio sin completar',
            'locacion.required' => 'Espacio sin completar',
            'codigo_barras.required' => 'Espacio sin completar',
            'id_laboratorio.required' => 'Espacio sin completar',
            'id_categoria.required' => 'Espacio sin completar'
        ];
    }
}
