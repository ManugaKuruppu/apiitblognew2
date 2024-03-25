<?php

namespace App\Http\Middleware;

use Closure;
use App\Enums\UserRole;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, UserRole $role)
    {
        if (! $request->user() || ! $request->user()->role->is($role)) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
