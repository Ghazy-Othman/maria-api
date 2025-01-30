<?php

namespace App\Http\Middleware;

use App\Http\Responses\CustomResponse;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CurrentUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->route('user_id') != Auth::user()->user_id) { 
            return CustomResponse::forbidden() ; 
        }
        return $next($request);
    }
}
