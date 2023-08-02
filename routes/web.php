<?php

use App\Http\Controllers\Admin\AssetController;
use App\Http\Controllers\Admin\InvestmentController as AdminInvestmentController;
use App\Http\Controllers\Admin\PlanController;
use App\Http\Controllers\Admin\TransactionController as AdminTransactionController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InvestmentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WalletController;
use App\Http\Livewire\Transact;
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
    return view('pages.home');
});

Route::middleware(['auth', 'verified', 'suspend'])->group(function () {
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('wallets', [WalletController::class, 'index']);
    Route::resource('transactions', TransactionController::class);
    Route::resource('invest', InvestmentController::class);
    Route::get('transaction/{type}', Transact::class)->name('transact');
});

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('transactions', AdminTransactionController::class);
    Route::resource('investments', AdminInvestmentController::class);
    Route::resource('plans', PlanController::class);
    Route::resource('assets', AssetController::class);
    Route::resource('users', UserController::class);
});

require __DIR__.'/auth.php';
