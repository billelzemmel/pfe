<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserCon
{
    public function handle(Request $request, Closure $next): Response
    {
/*         dd("it works");
 */        $token = $request->bearerToken();
        /* dd($token); */
/*         dd($request->input('token'));
 */        if ($token == auth()->user()->api_token) {
            return $next($request);
        }
        // return response()->json(['message' => 'Unauthorized'], 401);
        return response()->json(['message' => 'Token expired'], 401);

        

    }
}

