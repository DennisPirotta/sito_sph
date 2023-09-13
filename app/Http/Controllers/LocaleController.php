<?php

namespace App\Http\Controllers;

class LocaleController extends Controller
{
    public function __invoke(string $locale)
    {
        if ($locale === 'it'){
            app()->setLocale('en');
            session()->put('locale', 'en');
        }
        else{
            app()->setLocale('it');
            session()->put('locale', 'it');
        }
        return redirect()->back();
    }
}
