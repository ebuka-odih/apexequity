<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminDepositsController;
use App\Http\Controllers\Admin\AdminFundingController;
use App\Http\Controllers\Admin\AdminPaymentMethodController;
use App\Http\Controllers\Admin\AdminWithdrawalController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin', 'as' => 'admin.'], function(){

    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    Route::get('users', [UserController::class, 'users'])->name('users');
    Route::get('profile/{id}', [UserController::class, 'profile'])->name('profile');
    Route::delete('deleteUser/{id}', [UserController::class, 'deleteUser'])->name('deleteUser');

    Route::get('withdrawal', [AdminWithdrawalController::class, 'withdrawal'])->name('withdrawal');
    Route::get('withdrawal/detail/{id}', [AdminWithdrawalController::class, 'withdrawalDetails'])->name('withdrawalDetails');
    Route::get('approve/withdrawal/{id}', [AdminWithdrawalController::class, 'approveWithdrawal'])->name('approveWithdrawal');
    Route::delete('delete/withdrawal/{id}', [AdminWithdrawalController::class, 'deleteWithdrawal'])->name('deleteWithdrawal');

    Route::get('deposit', [AdminDepositsController::class, 'deposits'])->name('deposits');
    Route::get('deposit/detail/{id}', [AdminDepositsController::class, 'viewDeposit'])->name('viewDeposit');
    Route::get('approve/deposit/{id}', [AdminDepositsController::class, 'approveDeposit'])->name('approveDeposit');
    Route::delete('delete/deposit/{id}', [AdminDepositsController::class, 'deleteDeposit'])->name('deleteDeposit');

    Route::resource('wallet', AdminPaymentMethodController::class);
    Route::resource('funding', AdminFundingController::class);
});
