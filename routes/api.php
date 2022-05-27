<?php

use App\Http\Controllers\BetController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LotController;
use App\Http\Controllers\SurvivorController;
use Illuminate\Support\Facades\Route;

Route::apiResource('survivors', SurvivorController::class)->only('index', 'store');
Route::apiResource('items', ItemController::class)->only('index');
Route::apiResource('lots', LotController::class)->only('index', 'store', 'update');
Route::apiResource('bets', BetController::class)->only('index', 'store');



