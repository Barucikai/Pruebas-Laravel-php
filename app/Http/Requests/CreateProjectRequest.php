<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
/* Asi se podria hacer para validar los usuarios y alministradores ( return false; $this->user()->isAdmin(); ) 
permisos de increzos a diferentes herramientas*/

        return true; 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
/* reglas de validacion */
        return [

            'title'=>'required',
            'description'=>'required'

        ];
    }
// Mensajes de errores para las cajas de text 
    public function messages()
    {
        return [
            'title.required' => 'El proyecto necesita un titulo'
        ];
    }
}
