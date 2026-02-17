<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\SeoController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index');
Route::get('/products/{product:slug}', [CatalogController::class, 'show'])->name('catalog.show');
Route::get('/collections/{collection}', [CatalogController::class, 'collection'])->name('catalog.collection');

Route::get('/sitemap.xml', [SeoController::class, 'sitemap']);
Route::get('/sitemap-products.xml', [SeoController::class, 'sitemapProducts']);
Route::get('/robots.txt', [SeoController::class, 'robots']);
Route::get('/feed.xml', [SeoController::class, 'rssFeed']);
Route::get('/feed.json', [SeoController::class, 'jsonFeed']);

Route::post('/send-question', [ContactController::class, 'sendQuestion']);
