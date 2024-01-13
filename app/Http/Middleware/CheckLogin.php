<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check() || auth()->guard('client')->check()) {
            // if (Auth::check()) {
            // echo "ok";
            // Nếu người dùng đã đăng nhập, cho phép tiếp tục vào trang
            return $next($request);
        }


        // Nếu người dùng chưa đăng nhập, chuyển hướng về trang đăng nhập
        return redirect('/client');
    }
}
