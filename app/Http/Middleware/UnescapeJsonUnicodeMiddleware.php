<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UnescapeJsonUnicodeMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // Check if the response content type is JSON
        if ($response->headers->get('Content-Type') === 'application/json') {
            $response->setContent(json_encode(json_decode($response->getContent()), JSON_UNESCAPED_UNICODE));
        }

        return $response;
    }
}
