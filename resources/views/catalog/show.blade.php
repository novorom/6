@extends('layout')

@section('title', 'Коллекции плитки и керамогранита')
@section('meta_description', 'Обзор коллекций керамической плитки и керамогранита Cersanit.')

@php
    // Эта структура данных имитирует результат парсинга
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
    </div>
@endsection
