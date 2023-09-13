<?php

use App\Http\Controllers\LocaleController;
use App\Http\Controllers\MailController;
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

Route::get('/', fn() => view('home'));
Route::get('/locale/{locale}', LocaleController::class)->name('locale.update');
Route::get('/termini_e_condizioni', fn() => response()->file(public_path('/doc/INFORMATIVA_LPD_SVIZZERA_S+H_TECHNOLOGY.pdf')))->name('terms');
Route::post('/email/quote-request', [MailController::class, 'quote'])->name('email.quote-request');
Route::post('/email/work-request', [MailController::class, 'work'])->name('email.work-request');
