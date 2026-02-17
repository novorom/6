@extends('layout')

@section('title', $product->name . ' - Cersanit Shop')
@section('meta_description', 'Купить ' . $product->name . ' по выгодной цене. Скидка 20% от розницы. Доставка по Москве и области.')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div>
                @if($product->images->isNotEmpty())
                    <img src="{{ Storage::url($product->images->first()->path) }}" alt="{{ $product->name }}" class="w-full h-auto rounded-lg shadow-md">
                @else
                    <img src="{{ asset('images/placeholder.jpg') }}" alt="Изображение отсутствует" class="w-full h-auto rounded-lg shadow-md">
                @endif
            </div>
            <div>
                <h1 class="text-3xl font-bold mb-2">{{ $product->name }}</h1>
                <p class="text-gray-600 mb-4">Артикул: {{ $product->sku }}</p>

                <div class="mb-4">
                    <span class="text-2xl font-bold text-gray-800">{{ number_format($product->price_retail * 0.8, 2, ',', ' ') }} ₽</span>
                    <span class="text-lg text-gray-500 line-through ml-2">{{ number_format($product->price_retail, 2, ',', ' ') }} ₽</span>
                </div>

                <div class="prose max-w-none">
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
                        <tr class="w-full border-b">
                            <td class="py-2 px-4 text-gray-600">{{ $key }}</td>
                            <td class="py-2 px-4 font-semibold">{{ is_array($value) ? implode(', ', $value) : $value }}</td>
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
