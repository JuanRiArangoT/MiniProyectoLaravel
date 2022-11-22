<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Hashing\Hasher;

class UserRequest extends FormRequest
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
            'Nombre' => 'required|max:40',
            'SNombre' => 'max:40',
            'Apellido' => 'required|max:40',
            'SApellido' => 'required|max:40',
            'FechaNacimiento' => 'required',
            'Correo' => 'required|max:100',
            'Documento' => 'required',
            'IdDocumento' => 'required|numeric',
            'Contrasena' => 'required|max:100',
        ];
    }
}
