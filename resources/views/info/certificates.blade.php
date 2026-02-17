@extends('layout')

@section('title', 'Сертификаты и отказные письма - 2D')
@section('meta_description', 'Сертификаты и отказные письма для керамической плитки и керамогранита.')

@php
    $documents = [
        (object)[
            'endDate' => '22.01.2031',
            'subgroup' => '2D: Керамогранит и плитка',
            'type' => 'Протокол испытаний',
            'description' => 'ПИ_керамогранит_ФКЗ\\ККЗ_№1733-2197-р (к СС №BY\\112 02.01. ТР013 109.01 01971)',
            'fileType' => 'pdf',
            'fileSize' => '208.64 КБ',
            'downloadUrl' => 'https://pvi.cersanit.ru/files/download/6/26955/50497/',
        ],
        (object)[
            'endDate' => '22.01.2031',
            'subgroup' => '2D: Керамогранит и плитка',
            'type' => 'Протокол испытаний',
            'description' => 'ПИ_керамогранит_ФКЗ\\ККЗ_№88ИЛ-1-3 (к СС №BY\\112 02.01. ТР013 109.01 01971)',
            'fileType' => 'pdf',
            'fileSize' => '4.44 МБ',
            'downloadUrl' => 'https://pvi.cersanit.ru/files/download/6/26958/50508/',
        ],
        (object)[
            'endDate' => '22.01.2031',
            'subgroup' => '2D: Керамогранит и плитка',
            'type' => 'Протокол испытаний',
            'description' => 'ПИ_стена_ФКЗ_№1474-2197-р (к СС BY/112 02.01. ТР013 109.01 01863)',
            'fileType' => 'pdf',
            'fileSize' => '576.93 КБ',
            'downloadUrl' => 'https://pvi.cersanit.ru/files/download/6/26953/50495/',
        ],
        (object)[
            'endDate' => '22.01.2031',
            'subgroup' => '2D: Керамогранит и плитка',
            'type' => 'Сертификат соответствия',
            'description' => 'Сертификат соответствия (СС)_пол_ФКЗ\\ККЗ_Респ.Беларусь №BY\\112 02.01. ТР013 109.01 01971',
            'fileType' => 'pdf',
            'fileSize' => '521.16 КБ',
            'downloadUrl' => 'https://pvi.cersanit.ru/files/download/6/26950/50492/',
        ],
        (object)[
            'endDate' => '',
            'subgroup' => '2D: Керамогранит и плитка',
            'type' => 'Протокол испытаний',
            'description' => 'Износостойкость ФКЗ и ККЗ 16.01.2026',
            'fileType' => 'xls',
            'fileSize' => '131 КБ',
            'downloadUrl' => 'https://pvi.cersanit.ru/files/download/6/26935/50358/',
        ],
    ];
@endphp

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">Сертификаты и отказные письма (2D)</h1>

        <div class="bg-white shadow-md rounded my-6">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="py-3 px-6 text-left">Описание</th>
                        <th class="py-3 px-6 text-left">Тип</th>
                        <th class="py-3 px-6 text-left">Срок окончания</th>
                        <th class="py-3 px-6 text-left">Размер</th>
                        <th class="py-3 px-6 text-center">Скачать</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm">
                    @foreach($documents as $doc)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6">{{ $doc->description }}</td>
                            <td class="py-3 px-6">{{ $doc->type }}</td>
                            <td class="py-3 px-6">{{ $doc->endDate ?: 'N/A' }}</td>
                            <td class="py-3 px-6">{{ $doc->fileSize }}</td>
                            <td class="py-3 px-6 text-center">
                                <a href="{{ $doc->downloadUrl }}" class="text-blue-500 hover:text-blue-700" target="_blank" rel="noopener noreferrer">
                                    Скачать ({{ $doc->fileType }})
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
