<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarRequest extends FormRequest
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
                
            'nombre'=>'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email|unique:tb_usuario,email',
            'app' => 'required|regex:/^[\pL\s\-]+$/u',
            'apm' => 'required|regex:/^[\pL\s\-]+$/u',
            'pass' => 'required|regex:/^[\pL\s\-]+$/u',
            'tel' => 'required|regex:/[0-9]{10}/',
            'matricula'=>'required|unique:tb_usuario,matricula|numeric',
            'fn'=> 'required',
            'img'=>'required',
            'aviso'=>'required'

            ];
        }
}
