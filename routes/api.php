<?php

use App\Http\Controllers\MaladieRareController;
use Illuminate\Support\Facades\Route;

Route::apiResource('rare', MaladieRareController::class);