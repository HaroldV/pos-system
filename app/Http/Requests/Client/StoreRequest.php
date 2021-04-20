<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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

    public function rules()
    {
        return [
            'name' => 'required|string|max:255|',
            'dni' => 'required|email|string|min:8|max:8|unique:clients',
            'nit' => 'required|string|min:11|max:11|unique:clients',
            'address' => 'nullable|string|max:255',
            'phone' => 'string|min:9|max:9|unique:clients',
            'email' => 'string|max:255|unique:clients|email:rfc,dns',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Este campo es requerido',
            'name.string' => 'El valor no es correcto',
            'name.max' => 'Solo se permiten 255 caracteres',

            'dni.required' => 'Este campo es requerido',
            'dni.string' => 'El valor no es correcto',
            'dni.unique' => 'Este DNI ya se encuentra registrado',
            'dni.min' => 'Se requieren 8 caracteres',
            'dni.max' => 'Solo se permiten 8 caracteres',

            'email.email' => 'No es un correo electronico',
            'email.string' => 'El valor no es correcto',
            'email.max' => 'Solo se permiten 200 caracteres',
            'email.unique' => 'Este email ya se encuentra registrado',

            'nit.required' => 'Este campo es requerido',
            'nit.string' => 'El valor no es correcto',
            'nit.max' => 'Solo se permiten 11 caracteres',
            'nit.min' => 'Solo se permiten 11 caracteres',
            'nit.unique' => 'Este nit ya se encuentra registrado',

            'address.string' => 'El valor no es correcto',
            'address.max' => 'Solo se permiten 11 caracteres',

            'phone.string' => 'El valor no es correcto',
            'phone.max' => 'Solo se permiten 9 caracteres',
            'phone.min' => 'Solo se permiten 9 caracteres',
            'phone.unique' => 'Este telefono ya se encuentra registrado',
        ];
    }
}
