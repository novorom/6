@extends('layout')

@section('title', 'Каталог продукции Cersanit')
@section('meta_description', 'Полный каталог керамической плитки и керамогранита Cersanit. Лучшие цены от официального дилера в Санкт-Петербурге.')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Каталог продукции</h1>

    @if(empty($products))
        <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4" role="alert">
            <p class="font-bold">Информация</p>
            <p>В данный момент товары в каталоге отсутствуют или файл с товарами не найден. Пожалуйста, убедитесь, что файл <code>otch/products_full.xlsx</code> существует и доступен для чтения.</p>
        </div>
    @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
                <div class="bg-white border rounded-lg shadow-sm overflow-hidden">
                    {{-- Здесь может быть изображение товара, если оно будет в данных --}}
                    {{-- <img src="{{ $product->image_url ?? asset('images/placeholder.png') }}" alt="{{ $product->name }}" class="w-full h-48 object-cover"> --}}
                    <div class="p-4">
                        <h2 class="text-lg font-semibold text-gray-800 truncate" title="{{ $product->name }}">
                            {{ $product->name ?? 'Название отсутствует' }}
                        </h2>
                        <p class="text-sm text-gray-600 mt-1">
                            Артикул: {{ $product->sku ?? 'не указан' }}
                        </p>
                        
                        {{-- Раскомментируйте, если нужно отображать часть описания --}}
                        {{--
                        @if(!empty($product->description))
                        <div class="text-xs text-gray-500 mt-2">
                            <p class="truncate">{{ Str::limit($product->description, 50) }}</p>
                        </div>
                        @endif
                        --}}

                        {{-- Здесь может быть цена --}}
                        {{-- 
                        <div class="mt-4">
                            <span class="text-xl font-bold text-gray-900">{{ $product->price ?? 'Цена по запросу' }}</span>
                        </div> 
                        --}}
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
