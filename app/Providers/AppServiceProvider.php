<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\App as Application;
use Illuminate\Support\Facades\Crypt;
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
        // Prefer a persistent cookie for locale, fall back to session, then default
        $locale = null;
        $raw = request()->cookie('locale');
        if ($raw) {
            $raw = urldecode($raw);
            try {
                $decrypted = Crypt::decryptString($raw);
                // decrypted may be plain locale (e.g. "fr") or JSON/serialized; try to extract
                $localeCandidate = is_string($decrypted) ? $decrypted : null;
            } catch (\Throwable $e) {
                $localeCandidate = $raw;
            }
            $locale = $localeCandidate;
        }
        if (empty($locale)) {
            $locale = session('locale') ?? config('app.locale');
        }
        // Only accept simple locale codes (en, fr, ar)
        $available = ['en', 'fr', 'ar'];
        if (!in_array($locale, $available)) {
            $locale = config('app.locale');
        }
        Application::setLocale($locale);
        // Paginator::useBootstrapFive();
    }
}
