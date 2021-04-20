<?php

namespace App\Http\Requests\Provider;

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
            'name' => 'required|string|max:255|unique:providers',
            'email' => 'required|email|string|max:200|unique:providers',
            'nit' => 'required|string|max:11|min:11|unique:providers',
            'address' => 'nullable|string|max:255',
            'phone' => 'required|string|max:9|min:9|unique:providers',
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Este nombre esta ya esta registrado en otro proveedor',
            'name.required' => 'Este campo es requerido',
            'name.string' => 'El valor no es correcto',
            'name.max' => 'Solo se permiten 255 caracteres',

            'email.required' => 'Este campo es requerido',
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

            'phone.required' => 'Este campo es requerido',
            'phone.string' => 'El valor no es correcto',
            'phone.max' => 'Solo se permiten 9 caracteres',
            'phone.min' => 'Solo se permiten 9 caracteres',
            'phone.unique' => 'Este telefono ya se encuentra registrado',
        ];
    }
}
