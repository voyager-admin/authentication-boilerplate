<?php

namespace VoyagerAdmin\AuthenticationBoilerplate;

use Closure;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Voyager\Admin\Contracts\Plugins\AuthenticationPlugin;
use Voyager\Admin\Contracts\Plugins\Features\Provider\JS;

class AuthenticationBoilerplate implements AuthenticationPlugin, JS
{
    public $name = 'Authentication boilerplate';
    public $description = 'An authentication boilerplate for Voyager II';
    public $repository = 'voyager-admin/authentication-boilerplate';
    public $website = 'https://github.com/voyager-admin/authentication-boilerplate';
    public $version = '1.0.0';

    public function __construct()
    {
        $this->readme = realpath(dirname(__DIR__, 1).'/README.md');
    }

    public function provideJS() : string
    {
        return file_get_contents(realpath(dirname(__DIR__, 1).'/dist/authentication-boilerplate.umd.js'));
    }

    public function loginComponent(): ?string
    {
        return 'authentication-login';
    }

    public function authenticate(Request $request): ?array
    {
        // Authenticate your users.
        // Return an array with errors
        // or null when successfully logged in

        return null;
    }

    public function handleRequest(Request $request, Closure $next): mixed
    {
        // Handle request coming to Voyager

        return $next($request);
    }

    public function user(): ?Authenticatable
    {
        return Auth::user();
    }

    public function name(): ?string
    {
        return Auth::user()?->{$this->nameField()};
    }

    public function nameField(): string
    {
        return 'name';
    }

    public function avatar(): ?string
    {
        // A URL to the users avatar or null
        return null;
    }

    public function guard(): string
    {
        return 'web';
    }

    public function logout(): \Illuminate\Http\RedirectResponse
    {
        // Auth::logout();

        return redirect()->route('voyager.login');
    }

    public function redirectTo(): string
    {
        return route('voyager.dashboard');
    }

    public function forgotPassword(Request $request): \Illuminate\Http\RedirectResponse
    {
        // TODO: Throttle attempts
        $email = $request->get('email');
        // TODO: Validate Email, check if it exists, send mail

        return redirect()->back()->with([
            'success' => __('voyager::auth.forgot_password_conf'),
        ]);
    }

    public function forgotPasswordView(): bool
    {
        return true;
    }
}
