<?php
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Closure;
use Illuminate\Http\Request;

class AuthenticateJWT
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->bearerToken();

        if (!$token) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        try {
            $decoded = JWT::decode($token, new Key("secretkey", "HS256"));
            $request->user = $decoded;
        } catch (\Exception $e) {
            return response()->json(['message' => 'Invalid token'], 401);
        }

        return $next($request);
    }
}
