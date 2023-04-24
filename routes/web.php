<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

Route::get('/', [ImageController::class, 'index']);

Route::post('resizeImage', [ImageController::class, 'resizeImage'])->name('resizeImage');