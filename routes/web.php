<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Frontend\FrontendController;

// admin route
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\MembershipController;
// admin route
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\MyTransactionController;
use App\Http\Controllers\ProductGalleryController;
use App\Http\Controllers\ProductCategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/market', [FrontendController::class, 'market'])->name('market');
Route::get('/shop', [FrontendController::class, 'shop'])->name('shop');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/cari', [FrontendController::class, 'cari'])->name('cari');
Route::get('/blog', [FrontendController::class, 'blog'])->name('blog');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

    Route::post('/search-invoice', [FrontendController::class, 'searchInvoice'])->name('search-invoice');
    Route::get('/checkoutpage', [FrontendController::class, 'checkoutpage'])->name('checkoutpage');
    Route::get('/cart', [FrontendController::class, 'cart'])->name('cart');
    Route::get('/detail/{id}', [FrontendController::class, 'detail'])->name('detail');
    Route::post('/cart/{id}', [FrontendController::class, 'cartAdd'])->name('cart-add');
    Route::delete('/cart/{id}', [FrontendController::class, 'cartDelete'])->name('cart-delete');
    Route::post('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
    Route::get('/success', [FrontendController::class, 'success'])->name('success');
    Route::get('/track', [FrontendController::class, 'track'])->name('track');

    // ADMIN
    Route::name('dashboard.')->prefix('dashboard')->group(function () {
        Route::middleware(['admin'])->group(function () {
            Route::get('/', [DashboardController::class, 'index'])->name('index');
            Route::get('laporanmembership', [LaporanController::class, 'laporanmembership'])->name('laporanmembership');
            Route::resource('product', ProductController::class);
            Route::resource('membership', MembershipController::class);
            Route::resource('category', ProductCategoryController::class);
            Route::resource('product.gallery', ProductGalleryController::class)->shallow()->only([
                'index', 'create', 'store', 'destroy'
            ]);
            Route::get('transaction/{id}/status/{status}', [TransactionController::class, 'changeStatus'])->name('transaction.changeStatus');
            Route::resource('transaction', TransactionController::class)->only([
                'index', 'show', 'edit', 'update'
            ]);
            Route::resource('user', UserController::class);
        });
    });
});
