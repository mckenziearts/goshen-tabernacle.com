<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;

final class VerifyEmailController extends Controller
{
    public function __invoke(EmailVerificationRequest $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) { // @phpstan-ignore-line
            return redirect()->intended(
                config('app.frontend_url').RouteServiceProvider::HOME.'?verified=1'
            );
        }

        if ($request->user()->markEmailAsVerified()) { // @phpstan-ignore-line
            event(new Verified($request->user())); // @phpstan-ignore-line
        }

        return redirect()->intended(
            config('app.frontend_url').RouteServiceProvider::HOME.'?verified=1'
        );
    }
}
