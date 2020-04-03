<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nombre_cliente' => ['required'|'string'|'max:30'|'min:3'],
            'apellido_cliente' => ['required'|'string'|'max:30'],
            'tipo_doc' => ['required'],
            'numero_doc' => ['required'|'numeric'|'max:10'|'min:8' ],
            'telefono' => ['required'|'numeric'|'max:7'|'min:7'],
            'celular' => ['required'|'numeric'|'max:10'|'min:10'],
            'correo' => ['required'|'unique:e-mail'],
            'direccion' => ['required'],
        ];
    }
}
