<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Client\Response;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SendPirschHit {

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle (Request $request, Closure $next) {
        return $next($request);
    }

    /**
     * Terminates the request
     *
     * @param \Illuminate\Http\Request $request
     * @param mixed $response
     * @return void
     */
    public function terminate (Request $request, mixed $response) : void {
        if ($response instanceof RedirectResponse) {
            return;
        }

        if ($request->hasHeader('X-Livewire')) {
            return;
        }

        if (! app()->isProduction()) {
            return;
        }

        if ($accessToken = $this->obtainAccessToken()) {
            $this->hit($accessToken, $request);
        }
    }

    /**
     * Obtains the access token
     *
     * @return string|null
     */
    private function obtainAccessToken () : ?string {
        $result = Http::post('https://api.pirsch.io/api/v1/token', [
            'client_id' => config('services.pirsch.id'),
            'client_secret' => config('services.pirsch.secret')
        ])->json();

        $accessToken = $result['access_token'] ?? null;
        $expiresAt = $result['expires_at'] ?? null;

        //
        // Token could not be obtained
        if (! isset($accessToken) || ! isset($expiresAt)) {
            logger()->error('Pirsch Access Token Error:', $result ?? []);
            return null;
        }

        return $accessToken;
    }

    /**
     * Sends a page hit request
     *
     * @param string $accessToken
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Client\Response
     */
    private function hit (string $accessToken, Request $request) : Response {
        return Http::withToken($accessToken)->post('https://api.pirsch.io/api/v1/hit', [
            'url' => $request->fullUrl(),
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'accept_language' => $request->headers->get('Accept-Language'),
            'referrer' => request()->headers->get('Referer')
        ]);
    }
}
