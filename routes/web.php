<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\UserController;
use App\Models\Package;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Mockery\Matcher\Not;

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

Route::get('optimize', function () {
    Artisan::call('optimize');
    return 'Cache is cleared';
});

Route::get('clear', function () {
    Artisan::call('config:clear');
    return 'Cache is cleared';
});

Route::get('migrate', function () {
    Artisan::call('migrate');
    return 'Cache is cleared';
});

Route::get('seed', function () {
    Artisan::call('db:seed');
    return 'Cache is cleared';
});

Route::get('storage', function () {
    Artisan::call('storage:link');
    return 'Cache is cleared';
});

Route::get('key', function () {
    Artisan::call('key:generate');
    return 'Cache is cleared';
});

Route::get('cache', function () {
    Artisan::call('config:cache');
    return 'Cache is cleared';
});

Route::get('route', function () {
    Artisan::call('route:cache');
    return 'Cache is cleared';
});

Route::get('view', function () {
    Artisan::call('view:cache');
    return 'Cache is cleared';
});

Route::get('clearall', function () {
    Artisan::call('optimize');
    Artisan::call('config:clear');
    Artisan::call('migrate');
    Artisan::call('db:seed');
    Artisan::call('storage:link');
    Artisan::call('key:generate');
    Artisan::call('config:cache');
    Artisan::call('route:cache');
    Artisan::call('view:cache');
    return 'Cache is cleared';
});

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('about', [FrontendController::class, 'about'])->name('about');
Route::get('cctv', [FrontendController::class, 'cctv'])->name('cctv');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('dedicated', [FrontendController::class, 'dedicated'])->name('dedicated');
Route::get('design&installation', [FrontendController::class, 'designAndInstallation'])->name('designAndInstallation');
Route::get('domainreg', [FrontendController::class, 'domainreg'])->name('domainreg');
Route::get('ekdeshekrate', [FrontendController::class, 'ekdesh'])->name('ekdesh');
Route::get('homeinternet', [FrontendController::class, 'homeinternet'])->name('homeinternet');
Route::get('itsolution', [FrontendController::class, 'itsolution'])->name('itsolution');
Route::get('mail', [FrontendController::class, 'mail'])->name('mail');
Route::get('monitoring', [FrontendController::class, 'monitoring'])->name('monitoring');
Route::get('netequiopments', [FrontendController::class, 'netequiopments'])->name('netequiopments');
Route::get('onsitesupport', [FrontendController::class, 'onsitesupport'])->name('onsitesupport');

Route::get('serverconfi', [FrontendController::class, 'serverconfi'])->name('serverconfi');
Route::get('sohoz', [FrontendController::class, 'sohoz'])->name('sohoz');
Route::get('premium', [FrontendController::class, 'premium'])->name('premium');
Route::get('team', [FrontendController::class, 'team'])->name('team');
Route::get('testimonials', [FrontendController::class, 'testimonials'])->name('testimonials');
Route::get('webdesign', [FrontendController::class, 'webdesign'])->name('webdesign');
Route::get('webhosting', [FrontendController::class, 'webhosting'])->name('webhosting');

Route::post('purchase', [PurchaseController::class, 'store'])->name('purchase.store');
Route::get('packageinfo/{id}', [PackageController::class, 'packageinfo'])->name('packageinfo');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->prefix('admin')->group(function(){
    Route::resource('users', UserController::class);
    Route::resource('packages', PackageController::class);
    Route::get('orders', [OrderController::class, 'index'])->name('orders.index');
    Route::post('orders/delete/{id}', [OrderController::class, 'destroy'])->name('orderDelete');
    Route::get('orderAssign/{id}', [OrderController::class, 'orderAssign'])->name('orderAssign');
    Route::post('orderAssignUser', [OrderController::class, 'orderAssignUser'])->name('orderAssignUser');
    Route::get('assignOrderComplete/{id}', [OrderController::class, 'assignOrderComplete'])->name('assignOrderComplete');

});

require __DIR__.'/auth.php';
