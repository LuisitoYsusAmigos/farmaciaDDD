<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompraRequest extends FormRequest
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
            
            'id_lote' =>'required|integer',
            //'fecha_expiracion' => 'required|string|max:100',
            'precio_compra' => 'required|integer',
            'cantidad' => 'required|integer',
            'precio' => 'required|integer',
            'subtotal' => 'required|integer',
            'id_proveedor' => 'required|integer'
            
        ];
    }

    public function messages()
    {
        return [
            'id_lote.required' => 'El Numero de lote es requerido',
            //'fecha_expiracion.required' => 'La fecha de expiracion es requerida',
            'precio_compra.required' => 'El precio de compra es necesario',
            'cantidad.required' => 'La cantidad de productos es requerida',
            'precio.required'=> 'El precio es requerido',
            'subtotal.required' => 'El subtotal es requerido',
            'id_proveedor.required' => 'El id del proeedor es requerido'
        ];
    }
}
