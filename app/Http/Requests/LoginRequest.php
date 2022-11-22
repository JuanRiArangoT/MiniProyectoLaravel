<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\validation\Factory as validationFactory;

class LoginRequest extends FormRequest
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
            'IdDocumento',
            'Contrasena',
        ];
    }

    public function getCredentials(){
        $username = $this->get('IdDocumento');

        if($this->isEmail($IdDocumento)){
            return [
                'Correo' => $IdDocumento,
                'Contrasena' => $this->get('Contrasena')
            ];
        }

        return $this->only('IdDocumento', 'Contrasena');
    }

    public function isEmail($value){
        $factory = $this->container->make(ValidationFactory::class);

        return !$factory->make(['IdDocumento' => $value], ['IdDocumento' => 'Correo'])->fails();
    }
}
