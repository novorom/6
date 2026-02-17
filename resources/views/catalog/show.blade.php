@extends('layout')

@section('title', $product->name . ' - Cersanit Shop')
@section('meta_description', 'Купить ' . $product->name . ' по выгодной цене. Скидка 20% от розницы. Доставка по Москве и области.')

@section('content')
    @php
        $isTargetCategory = false;
        $targetCategories = ['керамическая плитка', 'керамогранит'];
        if (isset($product->category, $product->category->name) && in_array(mb_strtolower($product->category->name), $targetCategories, true)) {
            $isTargetCategory = true;
        }
    @endphp
    <div class="container mx-auto px-4 py-8" @if($isTargetCategory) itemscope itemtype="http://schema.org/Product" @endif>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                @if($product->images->isNotEmpty())
                    <img src="{{ Storage::url($product->images->first()->path) }}" alt="{{ $product->name }}" class="w-full h-auto rounded-lg shadow-md" @if($isTargetCategory) itemprop="image" @endif>
                @else
                    <img src="{{ asset('images/placeholder.jpg') }}" alt="Изображение отсутствует" class="w-full h-auto rounded-lg shadow-md">
                @endif
            </div>
            <div>
                <h1 class="text-3xl font-bold mb-2" @if($isTargetCategory) itemprop="name" @endif>{{ $product->name }}</h1>
                <p class="text-gray-600 mb-4" @if($isTargetCategory) itemprop="sku" @endif>Артикул: {{ $product->sku }}</p>

                <div class="mb-4" @if($isTargetCategory) itemprop="offers" itemscope itemtype="http://schema.org/Offer" @endif>
                    @if($isTargetCategory)
                        <meta itemprop="price" content="{{ number_format($product->price_retail * 0.8, 2, '.', '') }}" />
                        <meta itemprop="priceCurrency" content="RUB" />
                        <link itemprop="availability" href="http://schema.org/InStock" />
                    @endif
                    <span class="text-2xl font-bold text-gray-800">{{ number_format($product->price_retail * 0.8, 2, ',', ' ') }} ₽</span>
                    <span class="text-lg text-gray-500 line-through ml-2">{{ number_format($product->price_retail, 2, ',', ' ') }} ₽</span>
                </div>

                <div class="prose max-w-none" @if($isTargetCategory) itemprop="description" @endif>
                    {!! $product->description !!}
                </div>

                {{-- Add to cart button, etc. --}}
                <div class="mt-6">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Добавить в корзину
                    </button>
                </div>
            </div>
        </div>

        {{-- Product properties table --}}
        @if(!empty($product->properties))
        <div class="mt-12">
            <h2 class="text-2xl font-bold mb-4">Характеристики</h2>
            <table class="min-w-full bg-white">
                <tbody>
                    @foreach($product->properties as $key => $value)
                        <tr class="w-full border-b" @if($isTargetCategory) itemprop="additionalProperty" itemscope itemtype="http://schema.org/PropertyValue" @endif>
                            <td class="py-2 px-4 text-gray-600" @if($isTargetCategory) itemprop="name" @endif>{{ $key }}</td>
                            <td class="py-2 px-4 font-semibold" @if($isTargetCategory) itemprop="value" @endif>{{ is_array($value) ? implode(', ', $value) : $value }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>

    {{-- SEO JSON-LD Schema --}}
    <x-seo.product-schema :product="$product" />

@endsection
