<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

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
Route::middleware(ProtectAgainstSpam::class)->group(function () {
    Auth::routes();
});

Route::view('/', 'marketing.home')->name('home');
Route::get('/contact', [HomeController::class, 'show'])->name('contact.show');
Route::post('/contact', [HomeController::class, 'contactSave'])->name('contact.save')->middleware(ProtectAgainstSpam::class);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
});


