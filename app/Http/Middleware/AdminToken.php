<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminToken
{
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->bearerToken();
        if (!$token || !hash_equals((string) config('app.admin_api_token'), $token)) {
            return response()->json(['message' => 'Unauthorized.'], 401);
        }
        return $next($request);
    }
}
