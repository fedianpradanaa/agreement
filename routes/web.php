<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgreementController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| PUBLIC ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', [
    AgreementController::class,
    'index'
]);

Route::post(
    '/generate',
    [AgreementController::class, 'generate']
)->middleware('throttle:5,1');

Route::get('/verify/{token}', [
    AgreementController::class,
    'verify'
]);

Route::get('/signature/{type}/{token}', [
    AgreementController::class,
    'signature'
]);

Route::get('/success/{id}', [
    AgreementController::class,
    'success'
]);

Route::get(
    '/download/{token}',
    [AgreementController::class, 'download']
);

/*
|--------------------------------------------------------------------------
| ADMIN AUTH
|--------------------------------------------------------------------------
*/

Route::get(
    '/admin/login',
    [AuthController::class, 'login']
);

Route::post(
    '/admin/login',
    [AuthController::class, 'authenticate']
);

Route::post(
    '/admin/logout',
    [AuthController::class, 'logout']
);

/*
|--------------------------------------------------------------------------
| ADMIN PANEL
|--------------------------------------------------------------------------
*/

Route::middleware('admin')->group(function () {

    Route::get(
        '/admin',
        [AdminController::class, 'dashboard']
    );

    Route::get(
        '/admin/agreements',
        [AdminController::class, 'agreements']
    );

});