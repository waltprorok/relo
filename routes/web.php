<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Mail\ContactForm;
use App\Mail\ContactFormToUser;
use App\Models\Contact;
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
Route::resource('contact', ContactController::class)->only(['create', 'store'])->middleware(ProtectAgainstSpam::class);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
    Route::view('/contacts', 'webapp.contacts.contacts')->name('contacts');

    Route::prefix('web')->group(function () {
        Route::get('contacts/list', [ContactController::class, 'index']);
        Route::delete('contact/delete/{contact}', [ContactController::class, 'destroy']);
        Route::put('contact/update/{contact}', [ContactController::class, 'update']);
    });
});


Route::get('/mail-test', function() {
    $contact = Contact::factory()->make();
    return new ContactForm($contact);
});

Route::get('/mail-test-to', function() {
    $contact = Contact::factory()->make();
    return new ContactFormToUser($contact);
});


