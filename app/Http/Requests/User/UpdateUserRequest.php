<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
            'email'       => ['required', 'email', 'max:255', Rule::unique('users')->ignore($this->user)],
            'password'    => 'required|string|min:8',
            'birth_date'  => 'required|date',
        ];
    }
}
