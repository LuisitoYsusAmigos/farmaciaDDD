<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDetalle_ventaRequest extends FormRequest
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
        
        //['','','','','','',''];
        return [

            'id_detalle_venta'=>'',
            'subtotal'=>'required|decimal:2',
            'utilidad'=>'required|decimal:2',
            'cantidad'=>'',
            'precio'=>'required|decimal:2',
            'id_producto'=>'',
            'id_venta'=>'',
            

            /*
            'id_detalle_venta'=>'required|integer',
            'subtotal'=>'required|decimal:2',
            'utilidad'=>'required|decimal:2',
            'cantidad'=>'required|integer',
            'precio'=>'required|decimal:2',
            'id_producto'=>'required|integer',
            'id_venta'=>'required|integer',
            */ 
            
        ];
    }

    public function messages()
    {
        return [
            'id_detalle_venta'=>'id valido requerido',
            'subtotal'=>'dato requerido',
            'utilidad'=>'dato requerido, debe tener 2 decimales',
            'cantidad'=>'dato requerido, debe tener 2 decimales',
            'precio'=>'dato requerido, debe tener 2 decimales',
            'id_producto'=>'dato requerido',
            'id_venta'=>'dato requerido',
            
        ];
    }
}
