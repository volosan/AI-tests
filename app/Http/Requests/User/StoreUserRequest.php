<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'first_name'  => 'required|string|max:255',
            'second_name' => 'required|string|max:255',
            'email'       => 'required|email|unique:users|max:255',
            'password'    => 'required|string|min:8',
            'birth_date'  => 'required|date',
        ];
    }
}
