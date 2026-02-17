@extends('layout')

@section('title', 'Коллекции и каталог плитки и керамогранита')
@section('meta_description', 'Обзор коллекций и каталога SKU керамической плитки и керамогранита Cersanit.')

@php
    // Эта структура данных имитирует результат парсинга коллекций
    // со страницы https://pvi.cersanit.ru/catalog/2d/collections/
    $collections = [
        (object)[
            'name' => 'Amberwood',
            'images' => [
                'https://pvi.cersanit.ru/files/get/2/25882/46806/800/800/0/',
                'https://pvi.cersanit.ru/files/get/2/25882/46807/800/800/0/',
                'https://pvi.cersanit.ru/files/get/2/25882/46808/800/800/0/',
            ]
        ],
        (object)[
            'name' => 'Asher',
            'images' => [
                'https://pvi.cersanit.ru/files/get/2/25107/42832/800/800/0/',
                'https://pvi.cersanit.ru/files/get/2/25107/42833/800/800/0/',
                'https://pvi.cersanit.ru/files/get/2/25107/42837/800/800/0/',
                'https://pvi.cersanit.ru/files/get/2/25107/42838/800/800/0/',
                'https://pvi.cersanit.ru/files/get/2/25107/42839/800/800/0/',
                'https://pvi.cersanit.ru/files/get/2/25107/42840/800/800/0/',
            ]
        ],
        (object)[
            'name' => 'Aspen',
            'images' => [
                'https://pvi.cersanit.ru/files/get/2/26870/50159/800/800/0/',
                'https://pvi.cersanit.ru/files/get/2/26870/50167/800/800/0/',
                'https://pvi.cersanit.ru/files/get/2/26870/50154/800/800/0/',
                'https://pvi.cersanit.ru/files/get/2/26870/50155/800/800/0/',
                'https://pvi.cersanit.ru/files/get/2/26870/50160/800/800/0/',
            ]
        ],
        (object)[
            'name' => 'Avalon',
            'images' => [
                'https://pvi.cersanit.ru/files/get/2/25885/47230/800/800/0/',
                'https://pvi.cersanit.ru/files/get/2/25885/47231/800/800/0/',
                'https://pvi.cersanit.ru/files/get/2/25885/47235/800/800/0/',
                'https://pvi.cersanit.ru/files/get/2/25885/47236/800/800/0/',
                'https://pvi.cersanit.ru/files/get/2/25885/47237/800/800/0/',
            ]
        ],
        (object)[
            'name' => 'Bliss',
            'images' => [
                'https://pvi.cersanit.ru/files/get/2/24517/39855/800/800/0/',
                'https://pvi.cersanit.ru/files/get/2/24517/39856/800/800/0/',
                'https://pvi.cersanit.ru/files/get/2/24517/39848/800/800/0/',
                'https://pvi.cersanit.ru/files/get/2/24517/39849/800/800/0/',
                'https://pvi.cersanit.ru/files/get/2/24517/39850/800/800/0/',
            ]
        ],
    ];

    // Эта структура данных имитирует результат парсинга SKU
    // со страницы https://pvi.cersanit.ru/catalog/2d/
    $skus = [
        (object)[
            'bsu_code' => 'A17902',
            'description' => 'Глаз. керамогранит Amberwood светло-бежевый рельеф 18,5x59,8',
            'collection_name' => 'Amberwood',
            'images' => [
                'https://pvi.cersanit.ru/files/get/11/25864/46574/800/800/0/',
                'https://pvi.cersanit.ru/files/get/11/25864/46583/800/800/0/',
                'https://pvi.cersanit.ru/files/get/11/25864/46584/800/800/0/',
                'https://pvi.cersanit.ru/files/get/11/25864/46575/800/800/0/',
            ]
        ],
        (object)[
            'bsu_code' => 'A18047',
            'description' => 'Глаз. керамогранит Aspen светло-серый рельеф 18,5x59,8',
            'collection_name' => 'Aspen',
            'images' => [
                'https://pvi.cersanit.ru/files/get/11/26879/50140/800/800/0/',
                'https://pvi.cersanit.ru/files/get/11/26879/50141/800/800/0/',
                'https://pvi.cersanit.ru/files/get/11/26879/50132/800/800/0/',
            ]
        ],
        (object)[
            'bsu_code' => 'A17916',
            'description' => 'Глаз. керамогранит Avalon бежевый рельеф 42x42',
            'collection_name' => 'Avalon',
            'images' => [
                'https://pvi.cersanit.ru/files/get/11/25872/46609/800/800/0/',
                'https://pvi.cersanit.ru/files/get/11/25872/46610/800/800/0/',
                'https://pvi.cersanit.ru/files/get/11/25872/46611/800/800/0/',
            ]
        ],
        (object)[
            'bsu_code' => 'A17948',
            'description' => 'Глаз. керамогранит Bonsai Tree светло-серый рельеф ректификат 21,8x89,8',
            'collection_name' => 'Bonsai Tree',
            'images' => [
                'https://pvi.cersanit.ru/files/get/11/25922/46919/800/800/0/',
                'https://pvi.cersanit.ru/files/get/11/25922/46920/800/800/0/',
                'https://pvi.cersanit.ru/files/get/11/25922/46921/800/800/0/',
            ]
        ],
        (object)[
            'bsu_code' => 'A17974',
            'description' => 'Настенная плитка Brooklyn цветы светло-серый 29,8x59,8',
            'collection_name' => 'Brooklyn',
            'images' => [
                'https://pvi.cersanit.ru/files/get/11/26053/47542/800/800/0/',
            ]
        ],
    ];
@endphp

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">Каталог коллекций</h1>

        <div class="space-y-12">
            @foreach($collections as $collection)
                <div>
                    <h2 class="text-2xl font-semibold mb-4">{{ $collection->name }}</h2>
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                        @foreach($collection->images as $image)
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <img src="{{ $image }}" alt="Изображение из коллекции {{ $collection->name }}" class="w-full h-auto object-cover">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <h1 class="text-3xl font-bold mb-8 mt-16">Каталог SKU</h1>

        <div class="space-y-12">
            @foreach($skus as $sku)
                <div>
                    <h2 class="text-xl font-semibold mb-2">{{ $sku->description }}</h2>
                    <p class="text-gray-600 mb-4">Код: {{ $sku->bsu_code }} | Коллекция: {{ $sku->collection_name }}</p>
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                        @foreach($sku->images as $image)
                            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                                <img src="{{ $image }}" alt="Изображение для {{ $sku->bsu_code }}" class="w-full h-auto object-cover">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
