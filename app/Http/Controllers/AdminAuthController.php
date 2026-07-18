<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->validate(['email' => ['required', 'email'], 'password' => ['required', 'string']]);
        if ($data['email'] !== config('app.admin_email') || !hash_equals((string) config('app.admin_password'), $data['password'])) {
            return response()->json(['message' => 'Email atau kata sandi salah.'], 422);
        }
        return ['token' => config('app.admin_api_token'), 'token_type' => 'Bearer'];
    }
}
