<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVentaRequest extends FormRequest
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
            'id_venta' => 'required',
            'descuento' => 'required',
            'igv' => 'required',
            'precio_total' => 'required',
            'fecha_venta' => 'required',
            'id_cliente' => 'required',
            'id_usuario' => 'required'
        ];
    }

    //protected $fillable = ['id','nombre_producto','stock','stock_minimo','presentacion','medida','restriccion_venta','descripcion','locacion','codigo_barras'];

    public function messages()
    {
        return [
            'id_venta' => 'El id es requerido',
            'descuento' => 'Espacio sin completar',
            'igv' => 'Espacio sin completar',
            'precio_total' => 'Espacio sin completar',
            'fecha_venta' => 'Espacio sin completar',
            'id_cliente' => 'Espacio sin completar',
            'id_usuario' => 'Espacio sin completar'
        ];
    }
}