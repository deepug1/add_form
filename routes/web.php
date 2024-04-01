<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', [MyController::class, 'index']);
Route::post('/submit_form', [MyController::class, 'submit_form']);
