<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\SiteController;
use App\Http\Controllers\Admin\LoginController;
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
Route::get('/boss', [LoginController::class, 'login'])->name('admin.login');
Route::post('/boss-do-login', [LoginController::class, 'doLogin'])->name('admin.doLogin');
Route::get('/boss-logout', [LoginController::class, 'logout'])->name('admin.logout');

Route::get('/', [SiteController::class, 'index'])->name('site.index');
Route::get('lang/change', [SiteController::class, 'change'])->name('changeLang');

Route::get('/login', [SiteController::class, 'index'])->name('site.index');

Route::get('/config-clear', function() {
    Artisan::call('config:clear');
    // Do whatever you want either a print a message or exit
});

Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    // Do whatever you want either a print a message or exit
});

Route::get('/cache-clear', function() {
    Artisan::call('cache:clear');
    // Do whatever you want either print a message or exit
});

Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    // Do whatever you want either print a message or exit
});

Route::get('/storage-link', function() {
    Artisan::call('storage:link');
    // Do whatever you want either print a message or exit
    return redirect()->route('site.index');
});
