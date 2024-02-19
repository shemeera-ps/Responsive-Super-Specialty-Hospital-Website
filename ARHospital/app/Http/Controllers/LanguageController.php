<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function changeLanguage($locale)
    {
    if (in_array($locale, config('app.locales'))) {
        session(['locale' => $locale]);
    }
    
    $direction = ($locale === 'ar') ? 'rtl' : 'ltr';
    session(['direction' => $direction]);

    return back();
    }
}
