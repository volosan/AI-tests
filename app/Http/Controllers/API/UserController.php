<?php

namespace App\Http\Controllers\API;

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class UserController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        $users = User::all();
        return UserResource::collection($users);
    }

    public function store(StoreUserRequest $request): UserResource
    {
        $user = User::create($request->all());
        return new UserResource($user);
    }

    public function show(User $user): UserResource
    {
        return new UserResource($user);
    }

    public function update(UpdateUserRequest $request, User $user): UserResource
    {
        $user->update($request->all());
        return new UserResource($user);
    }

    public function destroy(User $user): JsonResponse
    {
        $user->delete();
        return response()->json(null, 204);
    }
}
