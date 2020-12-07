<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsuarioCreateRequest extends Request
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
            'nombres' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'rut' => 'required|unique:usuario',
            'telefono' => 'required',
            'email' => 'required|email|unique:usuario,email',
            'status' => 'required',
            'fecha_nacimiento' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'rut.required' => 'Debe ingresar algún rut',
            'rut.unique' => 'El rut del usuario ya fue registrado en el sistema',
            'nombres.required' => 'Los nombres son obligatorios',
            'apellido_paterno.required' => 'El apellido paterno es obligatorio',
            'apellido_materno.required' => 'El apellido materno es obligatorio',
            'telefono.required' => 'Debe ingresar algún número de teléfono',
            'email.required' =>'Debe ingresar algún email',
            'email.email' => 'Este email ya fue registrado en el sistema',
            'status.required' => 'Debe ingresar algun estado',
            'fecha_nacimiento.required' => 'Debe ingresar una fecha e nacimiento',
        ];
    }
}
