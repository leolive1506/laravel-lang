<?php

namespace App\Http\Middleware;

use App\Models\KycLevels;
use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\App;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {

            return route('login');
        }


    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]  ...$guards
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle($request, Closure $next, ...$guards)
    {
        parent::handle($request, $next, ...$guards);

        if (auth()->check()) {
            App::setLocale(match (auth()->user()->kyc_level_id) {
                KycLevels::DEV => 'en',
                KycLevels::SUPPORT => 'pt'
            });
        }

        return $next($request);
    }
}
