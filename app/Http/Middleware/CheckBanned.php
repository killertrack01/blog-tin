<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Str;

class CheckBanned
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
        if (auth()->check() && auth()->user()->banned_until && now()->lessThan(auth()->user()->banned_until)) {
            $banned_days = now()->diffInDays(auth()->user()->banned_until);
            auth()->logout();

            if ($banned_days > 0) {
                $message = 'Tài khoản của bạn đã bị tạm khóa. Vui lòng liên hệ với quản trị viên.';
            } 

            return redirect()->route('login')->withMessage($message);
        }

        return $next($request);
    }
}
