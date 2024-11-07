<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id'                => $this->id,
            'post_id'           => $this->post_id,
            'user_id'           => $this->user_id,
            'parent_comment_id' => $this->parent_comment_id,
            'text'              => $this->text,
            'created_at'        => $this->created_at,
            'updated_at'        => $this->updated_at,
            // 'user'              => new UserResource($this->user),
            // 'post'              => new PostResource($this->post),
            // 'parent_comment'    => $this->parent_comment ? new CommentResource($this->parent_comment) : null,
            // 'child_comments'    => CommentResource::collection($this->childComments),
        ];
    }
}
