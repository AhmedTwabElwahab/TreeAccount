<?php

use App\Http\Controllers\ChartAccountController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ChartAccountController::class,'index']);
