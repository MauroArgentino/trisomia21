<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Captcha;

class MensajeStoreRequest extends FormRequest
{
    //protected redirect
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
            'apellido_y_nombres' => 'required',
            'email' => 'required',
            'asunto' => 'required',
            'mensaje' => 'required',
            'captcha' => 'required|captcha'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'apellido_y_nombres.required' => 'El apellido y nombre son requeridos.',
            'email.required'  => 'Se requiere que ingrese su correo electrónico.',
            'asunto.required'  => 'Se requiere que escriba un asunto del tema que quiere hacer la consulta.',
            'mensaje.required'  => 'Se requiere que escriba un mensaje describiendo el motivo de su consulta.',
            'captcha.required'  => 'Se requiere que ingrese el código captcha.',
        ];
    }
}
