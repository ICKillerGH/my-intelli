<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Resources\UserResource;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function login(LoginRequest $request) 
    {
        $token = auth()->attempt($request->validated());

        if (!$token) {
            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        return UserResource::withToken(auth()->user(), $token);
    }
}
