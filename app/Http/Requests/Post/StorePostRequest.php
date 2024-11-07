<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title'   => 'required|string|max:255',
            'text'    => 'required|string',
            'user_id' => 'required|exists:users,id',
            'status'  => 'required|string|in:draft,published,archived',
        ];
    }
}
