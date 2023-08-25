<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EmailVerifyController;
use App\Http\Controllers\LanguageController;
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

Route::get('/', function () {
    return redirect(route('login.index'));
});

Route::view('register', 'auth.signup.index')->name('register.index');
Route::view('login', 'auth.login.index')->name('login.index');

Route::post('register', [RegisterController::class, 'register'])->name('register');

Route::get('set-language/{language}', [LanguageController::class, 'setLanguage'])->name('set-language');

Route::get('/email/verify/{id}/{hash}', [EmailVerifyController::class, 'emailVerify'])->name('verification.verify');
Route::view('email/verify', 'email-sent')->name('verification.notice');
