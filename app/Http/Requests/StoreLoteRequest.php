<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLoteRequest extends FormRequest
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
            'id_lote'=>'required|integer',
            'fecha_expiracion'=>'required|date',
            'precio_compra'=>'',
            'cantidad'=>'required|integer',
            'precio'=>'required|decimal:2',
            'subtotal'=>'required|decimal:2',
            'id_compra'=>'required|integer',
            'id_producto'=>'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'id_lote'=>'dato requerido',
            'fecha_expiracion'=>'dato requerido',
            'precio_compra'=>'dato requerido',
            'cantidad'=>'dato requerido',
            'precio'=>'dato requerido',
            'subtotal'=>'dato requerido',
            'id_compra'=>'dato requerido',
            'id_producto'=>'dato requerido'
        ];
    }
}
