<?php

use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');
    Route::get('transactions', [TransactionController::class, 'index'])->name('transactions.index');
});


require __DIR__.'/auth.php';
