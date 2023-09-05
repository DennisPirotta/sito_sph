<?php

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', fn() => view('home'));
Route::get('/locale/{locale}', function (string $locale) {
    if ($locale === 'it'){
        app()->setLocale('en');
        session()->put('locale', 'en');
    }
    else{
        app()->setLocale('it');
        session()->put('locale', 'it');
    }
    return redirect()->back();
})->name('locale.update');

Route::get('/terms', fn() => File::get(public_path('/doc/INFORMATIVA_LPD_SVIZZERA_S+H_TECHNOLOGY.pdf')));
