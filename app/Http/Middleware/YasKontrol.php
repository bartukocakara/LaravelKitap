<?php

namespace App\Http\Middleware;

use Closure;

class YasKontrol
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
        $yas = 20;
        if($yas < 18)
        {
            return redirect('yas-kontrol');
        }
        return $next($request);
    }
}
