<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    /**
     * The locales supported by the application.
     */
    protected array $supported = ['en', 'fr'];

    /**
     * Switch the application locale and redirect back.
     */
    public function switch(Request $request, string $locale): RedirectResponse
    {
        // Silently ignore unknown locales
        if (in_array($locale, $this->supported)) {
            $request->session()->put('locale', $locale);
            app()->setLocale($locale);
        }

        return redirect()->back();
    }
}
