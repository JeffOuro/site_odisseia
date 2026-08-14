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

Route::get('/sitemap.xml', function () {
    $baseUrl = config('app.url', 'https://odisseiafilosofica.com.br');
    $xml = '<?xml version="1.0" encoding="UTF-8"?>';
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
    $xml .= '<url><loc>' . htmlspecialchars($baseUrl) . '/</loc><lastmod>' . date('Y-m-d') . '</lastmod><changefreq>weekly</changefreq><priority>1.0</priority></url>';
    $xml .= '</urlset>';

    return response($xml, 200)->header('Content-Type', 'text/xml');
});

