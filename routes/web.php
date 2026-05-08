<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgreementController;

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