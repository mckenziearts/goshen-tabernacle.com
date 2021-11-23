<?php

namespace Modules\Core\Http\Middleware;

use Carbon\Carbon;
use Closure;

class LocaleMiddleware
{
    public function handle($request, Closure $next)
    {
        // Locale is enabled and allowed to be changed
        if (config('starterkit.core.locale.status') && session()->has('locale') && array_key_exists(session()->get('locale'), config('starterkit.core.locale.languages'))) {
            // Set the Laravel locale
            app()->setLocale(session()->get('locale'));

            // setLocale for php. Enables ->formatLocalized() with localized values for dates
            setlocale(LC_TIME, config('starterkit.core.locale.languages')[session()->get('locale')][1]);

            // setLocale to use Carbon source locales. Enables diffForHumans() localized
            Carbon::setLocale(config('starterkit.core.locale.languages')[session()->get('locale')][0]);

            /*
             * Set the session variable for whether or not the app is using RTL support
             * for the current language being selected
             * For use in the blade directive in BladeServiceProvider
             */
            if (config('starterkit.core.locale.languages')[session()->get('locale')][2]) {
                session(['lang-rtl' => true]);
            } else {
                session()->forget('lang-rtl');
            }
        }

        return $next($request);
    }
}