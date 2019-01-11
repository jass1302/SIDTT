<?php

namespace SIDTT\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class alumnoCrear extends FormRequest
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
            'boleta' => 'required',
            'boleta' => "unique:alumnos,boleta,$this->idUsuario,idUsuario",
            'nombre'=> 'required|min:3|max:20',
            'ape_pat' => 'required|min:3|max:20',
            'ape_mat' => 'required|min:3|max:20',
            'email' => 'required_with:email_confirmation|same:email_confirmation',
            'email_confirmation' => 'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
            'email' => "unique:usuarios,email,$this->idUsuario,idUsuario",
            'terms' => 'required'
        ];
    }
}
