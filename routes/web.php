<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
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
    return '<h1 style="text-align:center;">TRANG CHỦ UNICODE</h1>';
})->name('home');
Route::get('/', [DashboardController::class, 'index']);
Route::middleware('auth.admin')->prefix('admin')->group(function() {
    Route::middleware('auth.admin.products')->resource('products', ProductController::class);
});
