<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
class RequestCliente extends FormRequest
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
        // este comentario es para cuando se quiere tener diferentes validaciones para los formularios
        if ($this->isMethod('PATCH')){
            return[            
            'nombre'=>['required', 'string', 'max:255', 'min:2'],
            'apellido_paterno'=>['required', 'string', 'max:255'],
            'apellido_materno'=>['required', 'string', 'max:255'],
            'telefono'=>['required','required','string','max:20', ],
            'correo'=>['required','string', 'email', 'max:255'],           
        ];           

        }
        return [
            'nombre'=>['required', 'string', 'max:255', 'min:2'],
            'apellido_paterno'=>['required', 'string', 'max:255'],
            'apellido_materno'=>['required', 'string', 'max:255'],
            'telefono'=>['required','required','string','max:20', ],
            'correo'=>['required','string', 'email', 'max:255', Rule::unique('clientes')],           
        ];
    }
}
