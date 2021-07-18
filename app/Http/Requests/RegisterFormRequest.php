<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|max:10',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>"Name cannot be left blank",
            'email.required'=>"Email cannot be left blank",
            'email.unique'=>"Email was used !",
            'password.required'=>'Passord is required',
            'password.min'=>'Password must be more to three character',
            'password.max'=>'Password must be less to six character',
        ];
    }
}
