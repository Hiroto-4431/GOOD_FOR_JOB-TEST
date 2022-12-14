<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Company\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Company\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Company\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Company\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Company\Auth\NewPasswordController;
use App\Http\Controllers\Company\Auth\PasswordResetLinkController;
use App\Http\Controllers\Company\Auth\RegisteredUserController;
use App\Http\Controllers\Company\Auth\VerifyEmailController;
use App\Http\Controllers\PrefectureCityController;
use App\Http\Controllers\Company\JobController;
use App\Http\Controllers\Company\EntryController;
use App\Http\Controllers\Company\MessageController;


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

// Route::get('/', function () {
//   return view('company.welcome');
// });

Route::get('/dashboard', function () {
  return view('company.dashboard');
})->middleware(['auth:companies'])->name('dashboard');


Route::middleware('guest')->group(function () {
  Route::get('register', [RegisteredUserController::class, 'create'])
    ->name('register');

  Route::post('register', [PrefectureCityController::class, 'getCityOptions']);

  Route::post('register', [RegisteredUserController::class, 'store']);

  Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

  Route::post('login', [AuthenticatedSessionController::class, 'store']);

  Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
    ->name('password.request');

  Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
    ->name('password.email');

  Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
    ->name('password.reset');

  Route::post('reset-password', [NewPasswordController::class, 'store'])
    ->name('password.update');
});

Route::middleware('auth:companies')->group(function () {
  Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
    ->name('verification.notice');

  Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['signed', 'throttle:6,1'])
    ->name('verification.verify');

  Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware('throttle:6,1')
    ->name('verification.send');

  Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
    ->name('password.confirm');

  Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

  Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');

  Route::resource('job', JobController::class);
  Route::resource('entry', EntryController::class);
  Route::resource('message', MessageController::class);
});
