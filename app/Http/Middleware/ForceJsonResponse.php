<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

namespace App\Http\Middleware;

use Closure;

class ForceJsonResponse
{
    public function handle($request, Closure $next)
    {
        // Force JSON accept header
        $request->headers->set('Accept', 'application/json');
        
        // Get the response
        $response = $next($request);
        
        // Force JSON content type
        $response->headers->set('Content-Type', 'application/json');
        
        return $response;
    }
}