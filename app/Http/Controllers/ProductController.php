<?php

namespace App\Http\Controllers;

use App\Services\ReportParserService;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends Controller
{
    /**
     * @var ReportParserService
     */
    protected ReportParserService $reportParserService;

    /**
     * ProductController constructor.
     *
     * @param ReportParserService $reportParserService
     */
    public function __construct(ReportParserService $reportParserService)
    {
        $this->reportParserService = $reportParserService;
    }

    /**
     * Display a listing of the products.
     *
     * @param Request $request
     * @return View
     */
    public function index(Request $request): View
    {
        $allProducts = collect($this->reportParserService->getProducts());
        $perPage = 12; // Количество товаров на странице
        $currentPage = Paginator::resolveCurrentPage('page');

        $currentPageItems = $allProducts->slice(($currentPage - 1) * $perPage, $perPage)->all();

        $products = new LengthAwarePaginator($currentPageItems, $allProducts->count(), $perPage, $currentPage, [
            'path' => Paginator::resolveCurrentPath(),
            'pageName' => 'page',
        ]);

        return view('catalog.index', [
            'products' => $products,
        ]);
    }

    /**
     * Display the specified product.
     *
     * @param  string  $sku
     * @return View
     */
    public function show(string $sku): View
    {
        $products = collect($this->reportParserService->getProducts());
        $product = $products->firstWhere('sku', $sku);

        if (!$product) {
            abort(404, 'Товар не найден');
        }

        return view('catalog.show', [
            'product' => $product,
        ]);
    }
}
