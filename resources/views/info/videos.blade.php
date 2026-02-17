@extends('layout')

@section('title', 'Видеоматериалы - 2D')
@section('meta_description', 'Видеоматериалы, обзоры и презентации коллекций керамической плитки и керамогранита.')

@php
    $videos = [
        (object)[
            'title' => 'Видеопрезентация коллекции керамогранита WONDERSTONE',
            'type' => 'Видеопрезентация',
            'watchUrl' => 'https://rutube.ru/video/130559844594255b7c3a384589158c3c/',
            'downloadUrl' => 'https://cloud.mail.ru/public/2TjL/4s3qWjLzL',
        ],
        (object)[
            'title' => 'Инструкция по резке и укладке тонкого керамогранита Futura от Cersanit',
            'type' => 'Видеоинструкции',
            'watchUrl' => 'https://rutube.ru/video/2d328e4c40505a296a43cee3e8a3510a/',
            'downloadUrl' => 'https://cloud.mail.ru/public/2TjL/4s3qWjLzL',
        ],
        (object)[
            'title' => 'Коллекция керамогранита CAMBIO. Формат 60х120',
            'type' => 'Обзор',
            'watchUrl' => 'https://rutube.ru/video/2d328e4c40505a296a43cee3e8a3510a/',
            'downloadUrl' => 'https://cloud.mail.ru/public/5a3t/2WJqfQ8gE',
        ],
        (object)[
            'title' => 'Коллекция керамогранита CENTO. Формат 60х120',
            'type' => 'Обзор',
            'watchUrl' => 'https://rutube.ru/video/9e9d31a52d612198f583538f0894a181/',
            'downloadUrl' => 'https://cloud.mail.ru/public/yqWn/5mBhPz3o5',
        ],
        (object)[
            'title' => 'Коллекция керамогранита CITY LINE. Формат 30х60',
            'type' => 'Обзор',
            'watchUrl' => 'https://rutube.ru/video/01174b301a1111e58a829849d41a25a1/',
            'downloadUrl' => 'https://cloud.mail.ru/public/2JmN/5z6Qxcn3s',
        ],
    ];
@endphp

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">Видеоматериалы (2D)</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($videos as $video)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <h2 class="font-bold text-xl mb-2">{{ $video->title }}</h2>
                        <p class="text-gray-700 text-base mb-4">
                            Тип: {{ $video->type }}
                        </p>
                        <div class="flex space-x-4">
                            <a href="{{ $video->watchUrl }}" class="text-blue-500 hover:text-blue-700" target="_blank" rel="noopener noreferrer">Смотреть</a>
                            <a href="{{ $video->downloadUrl }}" class="text-gray-500 hover:text-gray-700" target="_blank" rel="noopener noreferrer">Скачать</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
