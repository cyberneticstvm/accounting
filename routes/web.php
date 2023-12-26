<?php

use App\Http\Controllers\WebController;
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

Route::middleware(['web'])->group(function () {
    Route::controller(WebController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/about', 'about')->name('about');
        Route::get('/faqs', 'faqs')->name('faqs');
        Route::get('/blog', 'blog')->name('blog');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/services/accounting', 'contact')->name('services.accounting');
        Route::get('/services/tax', 'contact')->name('services.tax');
        Route::get('/services/finance', 'contact')->name('services.finance');
    });
});
