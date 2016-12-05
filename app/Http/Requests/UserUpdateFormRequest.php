<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateFormRequest extends FormRequest
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
         //dd($request);
         return [
           'name'     => 'required',
           'email'    => 'required|email|unique:users,id,'.$this->get('id'),
           'password' => 'min:6|same:password_confirmation',
         ];
     }
     public function messages()
     {
       return [
         'name.required'     => 'O campo nome é obrigatório',
         'email.required'    => 'O campo e-mail é obrigatório',
         'email.email'       => 'Verifique a estrutura do campo e-mail',
         'email.unique'      => 'Este e-mail já existe, forneça outro',
         'password.min'      => 'A senha deve ter no mínimo 6 caracteres',
         'password.same'     => 'Senha e confirmação devem ser iguais',
       ];
     }
}
