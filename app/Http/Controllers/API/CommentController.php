<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\StoreCommentRequest;
use App\Http\Requests\Comment\UpdateCommentRequest;
use App\Http\Resources\CommentResource;
use App\Models\Comment;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CommentController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $comments = Comment::all();
        return CommentResource::collection($comments);
    }

    public function store(StoreCommentRequest $request): CommentResource
    {
        $comment = Comment::create($request->all());
        return new CommentResource($comment);
    }

    public function show(Comment $comment): CommentResource
    {
        return new CommentResource($comment);
    }

    public function update(UpdateCommentRequest $request, Comment $comment): CommentResource
    {
        $comment->update($request->all());
        return new CommentResource($comment);
    }

    public function destroy(Comment $comment): JsonResponse
    {
        $comment->delete();
        return response()->json(null, 204);
    }
}
