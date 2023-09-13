<?php

use App\Http\Controllers\MailController;
use App\Mail\QuoteRequest;
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

Route::get('/termini_e_condizioni', fn() => response()->file(public_path('/doc/INFORMATIVA_LPD_SVIZZERA_S+H_TECHNOLOGY.pdf')))->name('terms');

Route::post('/email/quote-request', [MailController::class, 'quote'])->name('email.quote-request');
Route::post('/email/work-request', [MailController::class, 'work'])->name('email.work-request');
Route::get('/email/work/view', function (){
    return new \App\Mail\WorkRequest(
        name: 'test',
        email: 'esempio@email.it',
        text: 'test',
        cv_path: fake()->file
    );
})->name('email.work-view');
