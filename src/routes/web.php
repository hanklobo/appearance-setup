<?php

use Illuminate\Support\Facades\Route;
use HankLobo\AppearanceSetup\Controllers\AppearanceSetupController;
use HankLobo\AppearanceSetup\Middleware\AuthorizeSetupAccess;

Route::middleware(['web', AuthorizeSetupAccess::class])->group(function () {
    Route::get('/setup', [AppearanceSetupController::class, 'index'])->name('appearance.setup');
    Route::post('/setup', [AppearanceSetupController::class, 'update'])->name('appearance.update');
    Route::post('/setup/upload/{type}', [AppearanceSetupController::class, 'uploadImage'])->name('appearance.upload');
});