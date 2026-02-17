<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Services\ReportParserService;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function (ReportParserService $reportParserService) {
    $allProducts = collect($reportParserService->getProducts());
    $bestsellers = $allProducts->shuffle()->take(6);

    return view('homepage', [
        'bestsellers' => $bestsellers
    ]);
})->name('home');

Route::get('/catalog', [ProductController::class, 'index'])->name('catalog.index');
