@extends('layout')

@section('title', 'Рекламные материалы - 2D')
@section('meta_description', 'Каталоги, логотипы и другие рекламные материалы для керамической плитки и керамогранита.')

@php
    $materials = [
        (object)[
            'date' => '28.01.2026',
            'brand' => 'Cersanit',
            'type' => 'Ньюслеттер',
            'description' => 'Newsletter GPT 60x60 River',
            'fileType' => 'pdf',
            'fileSize' => '4.56 МБ',
            'downloadUrl' => 'https://pvi.cersanit.ru/files/download/8/26960/50515/',
        ],
        (object)[
            'date' => '21.01.2026',
            'brand' => 'Cersanit',
            'type' => 'Ньюслеттер',
            'description' => 'Newsletter Cersanit GPT 60x60 и Ступени 30x60 Studio',
            'fileType' => 'pdf',
            'fileSize' => '8.68 МБ',
            'downloadUrl' => 'https://pvi.cersanit.ru/files/download/8/26142/50474/',
        ],
        (object)[
            'date' => '17.12.2025',
            'brand' => 'Cersanit',
            'type' => 'Ньюслеттер',
            'description' => 'Newsletter Cersanit GPT 18x60 Aspen Cherry',
            'fileType' => 'pdf',
            'fileSize' => '12.02 МБ',
            'downloadUrl' => 'https://pvi.cersanit.ru/files/download/8/26845/50073/',
        ],
        (object)[
            'date' => '20.10.2025',
            'brand' => 'Meissen Keramik',
            'type' => 'Лого',
            'description' => 'Meissen_Keramik_black_горизонтальный_png',
            'fileType' => 'png',
            'fileSize' => '116.49 КБ',
            'downloadUrl' => 'https://pvi.cersanit.ru/files/download/8/26545/49504/',
        ],
        (object)[
            'date' => '01.01.2024',
            'brand' => 'Cersanit',
            'type' => 'Каталог',
            'description' => 'Каталог 2D Cersanit 2024-2025',
            'fileType' => 'pdf',
            'fileSize' => '20 МБ', // Placeholder size
            'downloadUrl' => 'https://pvi.cersanit.ru/files/download/8/26436/49084/', // Placeholder URL
        ],
    ];
@endphp

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">Рекламные материалы (2D)</h1>

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
