<?php

use Illuminate\Support\Facades\Route;
use Spatie\Health\Http\Controllers\HealthCheckJsonResultsController;
use Spatie\Health\Http\Controllers\HealthCheckResultsController;

//Route::get('health-dashboard', HealthCheckResultsController::class);
Route::get('health-json', HealthCheckJsonResultsController::class);
