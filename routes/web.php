<?php

use App\Http\Controllers\WebController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProfileController;
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
        Route::get('/blogs', 'blogs')->name('blogs');
        Route::get('/blogs/{slug}', 'blog')->name('blog.single');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/services/accounting-and-bookkeeping', 'accounting')->name('services.accounting');
        Route::get('/services/tax-advisory', 'tax')->name('services.tax');
        Route::get('/services/financial-and-management-accounting-consultancy', 'finance')->name('services.finance');
        Route::get('/services/vat-services', 'vat')->name('services.vat');
    });

    Route::controller(EmailController::class)->group(function () {
        Route::post('/blog/comment', 'blogComment')->name('blog.comment');
        Route::post('/contact', 'contactSubmit')->name('contact.submit');
        Route::post('/requestcallback', 'requestCallBack')->name('request.callback.submit');
        Route::get('/message', 'successMessage')->name('success.message');
    });
});

Route::get('/login', function () {
    return view('user.login');
})->name('login');
Route::post('/login', [UserController::class, 'login'])->name('user.login');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/dash', [UserController::class, 'dashboard'])->name('user.dash');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog/create', [BlogController::class, 'store'])->name('blog.save');
    Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/blog/edit/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::get('/blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.delete');


    Route::get('/user', [UserController::class, 'index'])->name('user');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/user/create', [UserController::class, 'store'])->name('user.save');
    Route::get('/user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::put('/user/edit/{id}', [UserController::class, 'update'])->name('user.update');
    Route::get('/user/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');

    Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');
});
