<?php

use App\Http\Controllers\StaticPages\ContactUsController;
use Illuminate\Support\Facades\Route;
Route::name('web.static.')-> group(function () {
    /*Route::get('/', function () {
        return view('web.static.welcome');
    });*/

    Route::get('/', [ContactUsController::class, 'index'])
        ->name('welcome');

    Route::get('/contact-us', [ContactUsController::class, 'index'])
        ->name('contact-us');

    Route::post('/contact-us', [ContactUsController::class, 'store'])
        ->name('contact-us.store');


    Route::get('/thank-you', [ContactUsController::class, 'thankYou'])
        ->name('thank-you');

    return ;

});
