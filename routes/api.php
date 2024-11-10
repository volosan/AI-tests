<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('users', 'App\Http\Controllers\API\UserController');

Route::apiResource('posts', 'App\Http\Controllers\API\PostController');

Route::apiResource('comments', 'App\Http\Controllers\API\CommentController');
