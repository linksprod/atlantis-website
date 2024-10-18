<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\MailingController;



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
    return view('page1.page1');
})->name('page1');


Route::get('/about-tunisia', function () {
    return view('page2.page2');
});

Route::get('/3', function () {
    return view('page3.page3');
});

Route::get('/blog', function () {
    return view('pages.blogs');
});

Route::get('/blog-page', function () {
    return view('pages.blogpage');
});

Route::get('/about-atlantis', function () {
    return view('atlantis.atlantis');
});

Route::get('/travel-information', function () {
    return view('info.info');
});

Route::get('/trip-itinerary', function () {
    return view('pages.subpage');
});

Route::get('/partners', function () {
    return view('pages.partners');
});

Route::get('/article', function () {
    return view('pages.article');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource("blogs",BlogsController::class)->middleware(['auth']);
Route::resource("mailings", MailingController::class)->except(['store']);
Route::post('mailings', [MailingController::class, 'store'])->name('mailings.store');
require __DIR__.'/auth.php';
