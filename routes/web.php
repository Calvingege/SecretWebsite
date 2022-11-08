<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\addsController;
use App\Http\Controllers\purchasecontroller;

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

Route::get('/home', function() {
    return view('Home');
    })->name('Home');

// Jadi setelah beli sapi langsung dikasih unjuk aja sapi nya yang gimana
Route::get(
    '/purchase/sapi',
    [addsController::class, 'ShowAdds']
    )->name('ShowAdds');

// Bikin iklan disini
Route::get(
    '/create/adds',
    [addsController::class, 'CreateAdds']
    )->name('CreateAdds');

Route::get('/selesai', function() {
    return view('Finish');
    })->name('Finish');



// Bagian post 
Route::post(
    '/store/adds',
    [addsController::class, 'StoreAdds']
    )->name('StoreAdds');

Route::post(
    '/store/purchase',
    [addsController::class, 'StorePurchase']
    )->name('StorePurchase');
