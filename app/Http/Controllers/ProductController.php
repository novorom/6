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
}
