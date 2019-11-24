<?php

namespace App\Http\Middleware;

use Closure;

class API
{
    public function handle($request, Closure $next)
    {
        if($request->header('x-api-key') != env('APP_KEY')) {
            return response('Not valid token provider.', 401);
        } else {
            return $next($request);
        }
    }
}
