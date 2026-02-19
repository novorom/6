<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class CollectionController extends Controller
{
    /**
     * Display a visual collections grid
     */
    public function index(): View
    {
        $collections = Product::whereNotNull('collection')
            ->where('is_active', true)
            ->select('collection', \DB::raw('COUNT(*) as products_count'))
            ->groupBy('collection')
            ->orderBy('collection')
            ->get();

        // For each collection, get preview images
        $collectionData = $collections->map(function ($collection) {
            $collectionProducts = Product::where('collection', $collection->collection)
                ->where('is_active', true)
                ->whereNotNull('main_image')
                ->orderBy('sku')
                ->get();

            // Primary preview image (first product)
            $previewImage = $collectionProducts->first()?->main_image;

            // Get 4-5 thumbnails (excluding the first if possible)
            $thumbnails = $collectionProducts->skip(1)->take(4)->pluck('main_image')->toArray();

            // If we don't have enough thumbnails, add from the beginning
            if (count($thumbnails) < 4) {
                $additional = $collectionProducts->take(4 - count($thumbnails))->pluck('main_image')->toArray();
                $thumbnails = array_merge($thumbnails, $additional);
            }

            return [
                'name' => $collection->collection,
                'product_count' => $collection->products_count,
                'preview_image' => $previewImage,
                'thumbnails' => array_filter(array_unique($thumbnails)),
                'url' => route('collection.show', ['collection' => urlencode($collection->collection)]),
            ];
        })->filter(function ($collection) {
            return $collection['preview_image'] !== null;
        });

        return view('collections.index', [
            'collections' => $collectionData,
        ]);
    }

    /**
     * Show products from a specific collection
     */
    public function show(string $collection): View
    {
        // Decode URL-encoded collection name
        $collection = urldecode($collection);

        $products = Product::where('collection', $collection)
            ->where('is_active', true)
            ->orderBy('name')
            ->paginate(20);

        return view('collections.show', [
            'collection' => $collection,
            'products' => $products,
        ]);
    }
}