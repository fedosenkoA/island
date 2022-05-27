<?php

use App\Http\Controllers\SurvivorController;
use Illuminate\Support\Facades\Route;

Route::apiResource('survivors', SurvivorController::class);



