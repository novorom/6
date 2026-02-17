<?php

namespace App\Http\Controllers;

use App\Services\ReportParserService;
use Illuminate\Http\Request;
use Illuminate\View\View;

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
     * @return View
     */
    public function index(): View
    {
        $products = $this->reportParserService->getProducts();

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
