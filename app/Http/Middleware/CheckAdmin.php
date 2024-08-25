<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Sử dụng cột role để phân quyền admin và người dùng
        $role = auth()?->user()?->role;
        if($role != 0){
            return redirect()->route('admin.home');
        }
        return $next($request);
    }
}
