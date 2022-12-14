<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\UserController;
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

Route::middleware(['admin'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('user-list', [ListController::class, 'index'])->name('user-list.index');
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('profile-info-change', [ProfileController::class, 'update']);

    Route::get('template-one', [PDFController::class, 'templateOne'])->name('template-one');
    Route::get('template-two', [PDFController::class, 'templateTwo'])->name('template-two');
    Route::get('template-three', [PDFController::class, 'templateThree'])->name('template-three');
});
Route::middleware(['user'])->group(function () {

});
Route::post('store-one', [PDFController::class, 'generatePDFOne']);
Route::post('store-two', [PDFController::class, 'generatePDFTwo']);
Route::post('store-three', [PDFController::class, 'generatePDFThree']);

Route::get('/', [AuthController::class, 'login'])->name('/');
Route::get('registration', [AuthController::class, 'registration']);
Route::get('forgot', [AuthController::class, 'forgot']);
Route::get('recover/{token}', [AuthController::class, 'recover']);

Route::post('user-create', [UserController::class, 'store']);
Route::post('user-forget', [UserController::class, 'forget']);
Route::post('reset-user-pass', [UserController::class, 'reset']);
Route::post('login-check', [DashboardController::class, 'index'])->middleware('login-check');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
