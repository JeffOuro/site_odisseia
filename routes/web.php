<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/lead', [LeadController::class, 'store']);
