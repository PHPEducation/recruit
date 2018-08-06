<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;

class ElfinderConfig
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            if (!File::exists(public_path('uploads') . '/user_' . Auth::user()->id)) {
                File::makeDirectory(public_path('uploads') . '/user_' . Auth::user()->id, 0775);
            }
            Config::set('elfinder.dir', ["uploads/user_" . Auth::user()->id]);
        }
        return $next($request);
    }
}
