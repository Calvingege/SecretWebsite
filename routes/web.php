<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\addsController;
use App\Http\Controllers\paymentController;
use App\Http\Middleware\AdminMiddleware;

require __DIR__.'/auth.php';
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function() {
    return view('Home');
    })->name('Home');

// Jadi setelah beli sapi langsung dikasih unjuk aja sapi nya yang gimana
Route::get(
    '/purchase/sapi',
    [addsController::class, 'ShowAdds']
    )->name('ShowAdds');

// Bikin iklan disini, Cuma bisa diakses oleh admin 
Route::get(
    '/create/adds',
    [addsController::class, 'CreateAdds']
    )->middleware([AdminMiddleware::class, 'AdminMiddleware'])->name('CreateAdds');

// Bagian Pembayaran disini 
Route::get(
    '/create/payment',
    [paymentController::class, 'CreatePayment']
    )->name('CreatePayment');

// bagian nunjukin pembayaran, cuma bisa diakses oleh admin. 
Route::get(
    '/show/payment',
    [paymentController::class, 'ShowPayment']
    )->middleware([AdminMiddleware::class, 'AdminMiddleware'])->name('ShowPayment');

// Bagian final / selesainya disini
Route::get('/selesai', function() {
    return view('Finish');
    })->name('Finish');

// Bagian post 
Route::post(
    '/store/adds',
    [addsController::class, 'StoreAdds']
    )->name('StoreAdds');

Route::post(
    '/store/payment',
    [paymentController::class, 'StorePayment']
    )->name('StorePayment');