@extends('layout')

@section('title', 'Технические спецификации - 2D')
@section('meta_description', 'Технические спецификации и таблицы соответствия для керамической плитки и керамогранита.')

@php
    $specifications = [
        (object)[
            'date' => '16.01.2026',
            'description' => '2D_единая спецификация_16.01.2026',
            'fileType' => 'xlsx',
            'fileSize' => '142.2 КБ',
            'downloadUrl' => 'https://pvi.cersanit.ru/files/download/3/26934/50341/',
        ],
        (object)[
            'date' => '23.12.2025',
            'description' => '2D_единая спецификация_23.12.2025',
            'fileType' => 'xlsx',
            'fileSize' => '149.29 КБ',
            'downloadUrl' => 'https://pvi.cersanit.ru/files/download/3/26893/50313/',
        ],
        (object)[
            'date' => '01.10.2025',
            'description' => '2D_единая спецификация_01.10.2025',
            'fileType' => 'xlsx',
            'fileSize' => '149.38 КБ',
            'downloadUrl' => 'https://pvi.cersanit.ru/files/download/3/26519/49465/',
        ],
        (object)[
            'date' => '09.07.2024',
            'description' => 'Качество упаковки паллет',
            'fileType' => 'pdf',
            'fileSize' => '400.75 КБ',
            'downloadUrl' => 'https://pvi.cersanit.ru/files/download/3/24754/40331/',
        ],
    ];
@endphp

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">Технические спецификации (2D)</h1>

        <div class="bg-white shadow-md rounded my-6">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-3 px-6 text-left">Описание</th>
                        <th class="py-3 px-6 text-left">Дата</th>
                        <th class="py-3 px-6 text-center">Скачать</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm">
                    @foreach($specifications as $spec)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6">{{ $spec->description }}</td>
                            <td class="py-3 px-6">{{ $spec->date }}</td>
                            <td class="py-3 px-6 text-center">
                                <a href="{{ $spec->downloadUrl }}" class="text-blue-500 hover:text-blue-700" target="_blank" rel="noopener noreferrer">
                                    Скачать ({{ $spec->fileType }}, {{ $spec->fileSize }})
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
