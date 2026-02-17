@extends('layout')

@section('title', 'Трейд-маркетинг - 2D')
@section('meta_description', 'Материалы по трейд-маркетингу для керамической плитки и керамогранита.')

@php
    $materials = [
        (object)[
            'date' => '01.11.2022',
            'brand' => 'Cersanit',
            'type' => 'Каталог',
            'description' => 'Спецификация стенда Cersanit L с панелями и артикулами',
            'fileType' => 'xlsx',
            'fileSize' => '8.48 МБ',
            'downloadUrl' => 'https://pvi.cersanit.ru/files/download/10/22713/31778/',
        ],
        (object)[
            'date' => '01.11.2022',
            'brand' => 'Meissen Keramik',
            'type' => 'Каталог',
            'description' => 'Спецификация стенда MK XL с панелями и артикулами',
            'fileType' => 'xlsx',
            'fileSize' => '8.15 МБ',
            'downloadUrl' => 'https://pvi.cersanit.ru/files/download/10/22712/31777/',
        ],
        (object)[
            'date' => '11.06.2020',
            'brand' => 'Cersanit',
            'type' => 'Презентация',
            'description' => 'Стендовое оборудование 2D Cersanit 2020',
            'fileType' => 'pptx',
            'fileSize' => '30.05 МБ',
            'downloadUrl' => 'https://pvi.cersanit.ru/files/download/10/15842/17515/',
        ],
    ];
@endphp

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">Трейд-маркетинг (2D)</h1>

        <div class="bg-white shadow-md rounded my-6">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-3 px-6 text-left">Описание</th>
                        <th class="py-3 px-6 text-left">Бренд</th>
                        <th class="py-3 px-6 text-left">Тип</th>
                        <th class="py-3 px-6 text-center">Скачать</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm">
                    @foreach($materials as $item)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6">{{ $item->description }}</td>
                            <td class="py-3 px-6">{{ $item->brand }}</td>
                            <td class="py-3 px-6">{{ $item->type }}</td>
                            <td class="py-3 px-6 text-center">
                                <a href="{{ $item->downloadUrl }}" class="text-blue-500 hover:text-blue-700" target="_blank" rel="noopener noreferrer">
                                    Скачать ({{ $item->fileType }}, {{ $item->fileSize }})
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
