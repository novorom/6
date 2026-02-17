@extends('layout')

@section('title', $product->name ?? 'Товар')
@section('meta_description', Str::limit($product->description, 155))

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="grid md:grid-cols-2 gap-8">
        {{-- Image Gallery --}}
        <div>
            @if($product->main_image)
            <img src="{{ $product->main_image }}" alt="{{ $product->name }}" class="w-full rounded-lg shadow-lg">
            @else
            <div class="w-full h-96 bg-gray-200 flex items-center justify-center rounded-lg shadow-lg">
                <span class="text-gray-400 text-6xl">🏺</span>
            </div>
            @endif
        </div>

        {{-- Product Info --}}
        <div>
            <h1 class="text-4xl font-bold mb-2">{{ $product->name ?? 'Название отсутствует' }}</h1>
            <p class="text-lg text-gray-600 mb-6">Артикул: {{ $product->sku ?? 'не указан' }}</p>

            {{-- Price could go here --}}
            {{-- <div class="text-3xl font-bold text-gray-900 mb-6">
                {{ $product->price ?? 'Цена по запросу' }}
            </div> --}}

            <div class="mb-6">
                <a href="https://wa.me/79052050900?text=Здравствуйте, интересует товар {{ $product->name }} (арт: {{ $product->sku }})" target="_blank" class="w-full bg-green-500 text-white font-bold py-3 px-6 rounded-lg hover:bg-green-600 transition inline-block text-center">
                    Уточнить цену в WhatsApp
                </a>
            </div>

            <div class="prose max-w-none">
                <h2 class="text-2xl font-semibold mb-4">Описание и характеристики</h2>
                @if(!empty($product->description))
                    <p class="text-gray-700 whitespace-pre-wrap">{{ $product->description }}</p>
                @else
                    <p class="text-gray-500">Описание для этого товара отсутствует.</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
