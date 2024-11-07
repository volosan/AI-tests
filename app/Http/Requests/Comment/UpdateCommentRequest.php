<?php

namespace App\Http\Requests\Comment;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCommentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'post_id'           => 'required|exists:posts,id',
            'user_id'           => 'required|exists:users,id',
            'parent_comment_id' => 'nullable|exists:comments,id',
            'text'              => 'required|string',
        ];
    }
}
