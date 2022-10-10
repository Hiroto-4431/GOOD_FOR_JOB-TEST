<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\JobController;
use App\Http\Controllers\User\CompanyController;

use App\Http\Controllers\User\MessageController;
use App\Http\Controllers\User\EntryController;
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
    return view('user.welcome');
});

Route::get('/dashboard', function () {
    return view('user.dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::middleware('auth:users')->group(function () {
    Route::resource('company', CompanyController::class);

    Route::prefix('job')->name('job.')->group(function () {
        Route::get('/', [JobController::class, 'index'])->name('index');
        Route::get('/{job}', [JobController::class, 'show'])->name('show');
        Route::post('/{job}/entry', [JobController::class, 'entry'])->name('entry');
    });

    Route::resource('/message', MessageController::class);
    Route::resource('/entry', EntryController::class);
});
