<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\addsController;

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
Route::put(
    '/purchase/sapi',
    [addsController::class, 'StoreSapi']
    )->name('StoreSapi');

Route::post(
    '/create/adds',
    [addsController::class, 'CreateAdds']
    )->name('CreateAdds');

Route::get('/selesai', function() {
    return view('Finish');
    })->name('Finish');

Route::post(
    '/store/adds',
    [addsController::class, 'StoreAdds']
    )->name('StoreAdds');
