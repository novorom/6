@extends('layout')

@section('title', 'Видеорекомендации по уходу - 2D')
@section('meta_description', 'Видеорекомендации по уходу за керамической плиткой и керамогранитом.')

@php
    $videos = [
        (object)[
            'title' => 'Как правильно резать керамогранит',
            'watchUrl' => 'https://rutube.ru/video/74cfceef8fb139d0f5ba9c725c8e18cb/',
            'downloadUrl' => 'https://csrkz.sharepoint.com/:v:/s/Marketing1/EeWXrm_TIfNDs8pOdbsXEr4BUg70XFX3auTAPOt-JsGiTg?e=7Iw2cr',
        ],
        (object)[
            'title' => 'Рекомендации по удалению воска с поверхности плитки',
            'watchUrl' => 'https://rutube.ru/video/b5704d5afd07fd1e4752e9fe53ba6bed/',
            'downloadUrl' => 'https://csrkz.sharepoint.com/:v:/s/Marketing1/EXymzFUB8m9Dk1Rpkf4CpKwBpM1C_qeaXbrH6EFlMsbpPg?e=tco9e5',
        ],
        (object)[
            'title' => 'Рекомендации по удалению клея с поверхности керамической плитки',
            'watchUrl' => 'https://rutube.ru/video/d251b07eab4e5b0cd4528f4372959307/',
            'downloadUrl' => 'https://csrkz.sharepoint.com/:v:/s/Marketing1/ETVkYrj1fHtKkDM0Tu4kqjgBhAY6OjshjJG_C5v_hDHv0g?e=uMUBzL',
        ],
        (object)[
            'title' => 'Рекомендации по удалению маркера с поверхности керамической плитки',
            'watchUrl' => 'https://rutube.ru/video/0e929b0cbd2a43ac7a4f3d5bdf41551e/',
            'downloadUrl' => 'https://csrkz.sharepoint.com/:v:/s/Marketing1/EQ6zMFUbwbZNm6woDgBRzbkBNYClu2iL58_LlnZQ93b10A?e=3PkOc9',
        ],
        (object)[
            'title' => 'Рекомендации по уходу за керамической плиткой с гранильным покрытием',
            'watchUrl' => 'https://rutube.ru/video/a8221b6802636a4709738c8ec138a627/',
            'downloadUrl' => 'https://csrkz.sharepoint.com/:v:/s/Marketing1/ETtj_1kEUMpJnotbck5RQagBJc5gvr9JIPYQG1THFEwdPw?e=wShJ2C',
        ],
    ];
@endphp

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">Видеорекомендации по уходу (2D)</h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($videos as $video)
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="p-6">
                        <h2 class="font-bold text-xl mb-2">{{ $video->title }}</h2>
                        <div class="flex space-x-4 mt-4">
                            <a href="{{ $video->watchUrl }}" class="text-blue-500 hover:text-blue-700" target="_blank" rel="noopener noreferrer">Смотреть</a>
                            <a href="{{ $video->downloadUrl }}" class="text-gray-500 hover:text-gray-700" target="_blank" rel="noopener noreferrer">Скачать</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
