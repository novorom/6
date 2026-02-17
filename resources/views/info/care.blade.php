@extends('layout')

@section('title', 'Рекомендации по уходу - 2D')
@section('meta_description', 'Рекомендации по уходу, укладке и очистке керамической плитки и керамогранита.')

@php
    $recommendations = [
        (object)[
            'date' => '17.10.2024',
            'type' => 'Другое',
            'description' => 'Памятка определения кривизны плитки Крупноформатных размеров',
            'fileType' => 'pdf',
            'fileSize' => '296.61 КБ',
            'downloadUrl' => 'https://pvi.cersanit.ru/files/download/16/25356/42770/',
        ],
        (object)[
            'date' => '02.10.2023',
            'type' => 'Укладка',
            'description' => 'Рекомендации по укладке рельефной плитки',
            'fileType' => 'pdf',
            'fileSize' => '4.44 МБ',
            'downloadUrl' => 'https://pvi.cersanit.ru/files/download/16/24246/37791/',
        ],
        (object)[
            'date' => '22.12.2022',
            'type' => 'Клей',
            'description' => 'Рекомендации по удалению клея с поверхности плитки',
            'fileType' => 'pdf',
            'fileSize' => '104.63 КБ',
            'downloadUrl' => 'https://pvi.cersanit.ru/files/download/16/22996/32418/',
        ],
        (object)[
            'date' => '03.10.2022',
            'type' => 'Укладка',
            'description' => 'Рекомендации по укладке Керамогранита',
            'fileType' => 'pdf',
            'fileSize' => '136.82 КБ',
            'downloadUrl' => 'https://pvi.cersanit.ru/files/download/16/22661/35860/',
        ],
        (object)[
            'date' => '20.09.2022',
            'type' => 'Воск',
            'description' => 'Рекомендации по удалению воска с поверхности плитки',
            'fileType' => 'pdf',
            'fileSize' => '118.36 КБ',
            'downloadUrl' => 'https://pvi.cersanit.ru/files/download/16/22659/35861/',
        ],
    ];
@endphp

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">Рекомендации по уходу (2D)</h1>

        <div class="bg-white shadow-md rounded my-6">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-3 px-6 text-left">Описание</th>
                        <th class="py-3 px-6 text-left">Тип</th>
                        <th class="py-3 px-6 text-left">Дата</th>
                        <th class="py-3 px-6 text-center">Скачать</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm">
                    @foreach($recommendations as $rec)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6">{{ $rec->description }}</td>
                            <td class="py-3 px-6">{{ $rec->type }}</td>
                            <td class="py-3 px-6">{{ $rec->date }}</td>
                            <td class="py-3 px-6 text-center">
                                <a href="{{ $rec->downloadUrl }}" class="text-blue-500 hover:text-blue-700" target="_blank" rel="noopener noreferrer">
                                    Скачать ({{ $rec->fileType }}, {{ $rec->fileSize }})
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
