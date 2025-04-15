<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocentController;
use App\Http\Controllers\VakController;

Route::get('/docenten', [DocentController::class, 'index']);
Route::get('/vakken', [VakController::class, 'index']);
