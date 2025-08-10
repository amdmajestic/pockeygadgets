<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as BaseController;

Route::get('/', [BaseController\HomeController::class, 'index'])->name('home');
Route::get('/about_us', [BaseController\AboutUsController::class, 'index'])->name('about_us');
Route::get('/contact_us', [BaseController\ContactUsController::class, 'index'])->name('contact_us');
Route::get('/shop', [BaseController\ShopController::class, 'index'])->name('shop');
Route::get('/blog', [BaseController\BlogController::class, 'index'])->name('blog');
Route::get('/faqs', function () {
    echo "NaN";
    return redirect()->route('home');
    // return redirect('/home');
    // return view('');
})->name('faqs');

// Any unidentified route
// Route::fallback(function () {
//     echo 'No page found!';
//     return view('pages.status.404_error');
// });
