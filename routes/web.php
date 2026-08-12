<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/leads', function (Illuminate\Http\Request $request) {
    if ($request->query('senha') !== 'odisseia2024') {
        abort(403, 'Acesso restrito.');
    }
    $leads = App\Models\Lead::orderBy('created_at', 'desc')->get();
    return view('leads', compact('leads'));
});

Route::post('/lead', [LeadController::class, 'store']);
