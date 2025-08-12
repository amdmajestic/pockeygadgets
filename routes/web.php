<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as BaseController;

/* ALTERNATIVE
    // Define common routes closure
    $commonRoutes = function () {
        Route::get('/', [BaseController\HomeController::class, 'index'])->name('home');
        Route::get('/about_us', [BaseController\AboutUsController::class, 'index'])->name('about_us');
        Route::get('/contact_us', [BaseController\ContactUsController::class, 'index'])->name('contact_us');
        Route::get('/shop', [BaseController\ShopController::class, 'index'])->name('shop');
        Route::get('/blog', [BaseController\BlogController::class, 'index'])->name('blog');
        Route::get('/faqs', function () {
            return redirect()->route('home');
        })->name('faqs');
    };

    // Apply admin middleware for special permission routes
    Route::middleware(['auth', 'admin'])->group(function () use ($commonRoutes) {
        // Add specific routes for admin actions
        // Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        // The admin routes can access the same set of routes as regular routes
        // but apply special middleware (adminAuth) for admin-specific permissions
        // Apply the common routes under the '/admin/*' path
        Route::get('/admin/*', $commonRoutes);  // Apply the routes under the '/admin/*' path
    });

    // Apply public routes, accessible by all users (including non-authenticated users)
    Route::get('/*', $commonRoutes); 
 */


$commonRoutes = function () {
    Route::get('/', [BaseController\HomeController::class, 'index'])->name('home');
    Route::get('/about_us', [BaseController\AboutUsController::class, 'index'])->name('about_us');
    Route::get('/contact_us', [BaseController\ContactUsController::class, 'index'])->name('contact_us');
    Route::get('/shop', [BaseController\ShopController::class, 'index'])->name('shop');
    Route::get('/blog', [BaseController\BlogController::class, 'index'])->name('blog');
    Route::get('/faqs', function () {
        echo "NaN";
        return redirect()->route('home');
        // return redirect('/home');
        // return redirect()->to('/home');
        // return view('');
    })->name('faqs');
};

// Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () use ($commonRoutes) {
//     // Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
//     Route::group([], $commonRoutes)->name('admin.');
// });

// Route::prefix('admin')->group(function () use ($commonRoutes) {
//     Route::group([], $commonRoutes)->name('admin.');
// });

Route::group([], $commonRoutes);

// Any unidentified route
Route::fallback(function () {
    echo 'No page found!';
    return view('pages.status.404_error');
});
