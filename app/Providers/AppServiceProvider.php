<?php

namespace App\Providers;
use Laravel\Fortify\Fortify;
use Illuminate\Http\Request;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::loginView(function () {
            return view('auth.login');
        });
        Fortify::registerView(function () {
            return view('auth.register');
        });
        Fortify::requestPasswordResetLinkView(function () {
            return view('auth.forgot-password');
        });
        Fortify::resetPasswordView(function (Request $request) {
            return view('auth.reset-password', ['request' => $request]);
        });
    }
}
