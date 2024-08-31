<?php

namespace HankLobo\AppearanceSetup\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthorizeSetupAccess
{
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check() || !auth()->user()->can('access-setup')) {
            abort(403, 'Unauthorized access to setup page.');
        }

        return $next($request);
    }
}