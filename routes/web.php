<?php

use App\Http\Controllers\DepositController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'user', 'as' => 'user.'], function(){

    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('menu', [UserController::class, 'menu'])->name('menu');

    Route::get('deposit', [DepositController::class, 'deposit'])->name('deposit');
    Route::post('process/deposit', [DepositController::class, 'processDeposit'])->name('processDeposit');
    Route::get('payment/{id}', [DepositController::class, 'payment'])->name('payment');
    Route::patch('process/payment', [DepositController::class, 'processPayment'])->name('processPayment');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
