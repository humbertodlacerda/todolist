<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Register a user
     */
    public function register(AuthRequest $request)
    {
        $validated = $request->validated();

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password']),
        ]);

        $token = $user->createToken('primeirotoken')->plainTextToken;

        $response = [
            'token' => $token,
            'user' => $user
        ];

        return response()->json($response, 201);
    }
}
