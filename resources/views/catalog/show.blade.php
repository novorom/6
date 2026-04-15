@extends('layout')

@php $parsed = $product->getParsedDescription(); @endphp

@section('title', $product->name . ' | Купить в Санкт-Петербурге')
@section('meta_description', $product->name . ' - ' . ($product->collection ?? '') . '. Артикул: ' . $product->sku . '. В наличии на складе в Янино и на заводе. Доставка по СПб.')

@push('scripts')
<script type="application/ld+json">
{!! json_encode($product->getSchemaOrgData()) !!}
</script>
@endpush

@section('content')
<!-- Хлебные крошки -->
<div class="container mx-auto px-4 py-6">
    <nav class="text-sm text-gray-500 mb-6">
        <a href="/" class="hover:text-blue-600 transition-colors">Главная</a>
        <span class="mx-2 text-gray-300">/</span>
        <a href="/catalog" class="hover:text-blue-600 transition-colors">Каталог</a>
        @if($product->collection)
            <span class="mx-2 text-gray-300">/</span>
            <a href="{{ route('collection.show', ['collection' => urlencode($product->collection)]) }}" class="hover:text-blue-600 transition-colors">{{ $product->collection }}</a>
        @endif
        <span class="mx-2 text-gray-300">/</span>
        <span class="text-gray-700">{{ $product->name }}</span>
    </nav>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 xl:gap-12">
        {{-- Галерея изображений --}}
        <div class="space-y-4">
            {{-- Основное изображение --}}
            <div class="bg-white rounded-2xl shadow-sm border overflow-hidden">
                @if($product->main_image)
                    <img id="main-image" src="{{ $product->main_image }}" alt="{{ $product->name }}" class="w-full h-auto">
                @else
                    <div class="w-full aspect-square bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center">
                        <svg class="w-32 h-32 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                    </div>
                @endif
            </div>

            {{-- Миниатюры --}}
            @if($parsed['collection_image'] || count($parsed['technical_images']) > 0 || $product->main_image)
                <div class="flex gap-3 overflow-x-auto pb-2">
                    @if($product->main_image)
                        <button onclick="document.getElementById('main-image').src='{{ $product->main_image }}'" class="flex-shrink-0 w-20 h-20 rounded-lg border-2 border-transparent hover:border-blue-500 overflow-hidden transition-all">
                            <img src="{{ $product->main_image }}" alt="" class="w-full h-full object-cover">
                        </button>
                    @endif
                    @if($parsed['collection_image'])
                        <button onclick="document.getElementById('main-image').src='{{ $parsed['collection_image'] }}'" class="flex-shrink-0 w-20 h-20 rounded-lg border-2 border-transparent hover:border-blue-500 overflow-hidden transition-all">
                            <img src="{{ $parsed['collection_image'] }}" alt="" class="w-full h-full object-cover">
                        </button>
                    @endif
                    @foreach($parsed['technical_images'] as $img)
                        <button onclick="document.getElementById('main-image').src='{{ $img }}'" class="flex-shrink-0 w-20 h-20 rounded-lg border-2 border-transparent hover:border-blue-500 overflow-hidden transition-all">
                            <img src="{{ $img }}" alt="" class="w-full h-full object-cover">
                        </button>
                    @endforeach
                </div>
            @endif
        </div>

        {{-- Информация о продукте --}}
        <div class="space-y-6">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">{{ $product->name }}</h1>
                <p class="text-gray-500">
                    Артикул: <span class="text-gray-900 font-medium">{{ $product->sku }}</span>
                    @if($product->collection)
                        <span class="mx-3 text-gray-300">|</span>
                        <a href="{{ route('collection.show', ['collection' => urlencode($product->collection)]) }}" class="text-blue-600 hover:underline">{{ $product->collection }}</a>
                    @endif
                </p>
            </div>

            {{-- Цена и наличие --}}
            <div class="bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl p-6 space-y-4">
                @if($product->price_retail)
                    @php $price = round($product->price_retail * 0.8); @endphp
                    <div class="flex items-baseline gap-3 flex-wrap">
                        <span class="text-4xl font-bold text-gray-900">{{ number_format($price, 0, '.', ' ') }} ₽</span>
                        @if($product->price_retail > $price)
                            <span class="text-lg text-gray-400 line-through">{{ number_format($product->price_retail, 0, '.', ' ') }} ₽</span>
                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">
                                Экономия {{ number_format($product->price_retail - $price, 0, '.', ' ') }} ₽
                            </span>
                        @endif
                        <span class="text-gray-500">/м²</span>
                    </div>
                @endif

                {{-- Остатки --}}
                <div class="space-y-2 pt-2 border-t border-gray-200">
                    @if($product->stock_yanino)
                        <div class="flex items-center gap-2 text-green-600">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="font-medium">В наличии в Янино: {{ $product->stock_yanino }} м²</span>
                            <span class="text-gray-500 text-sm">— самовывоз / доставка 1-2 дня</span>
                        </div>
                    @endif
                    @if($product->stock_factory)
                        <div class="flex items-center gap-2 text-blue-600">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="font-medium">На заводе: {{ $product->stock_factory }} м²</span>
                            <span class="text-gray-500 text-sm">— доставка ~7 дней</span>
                        </div>
                    @endif
                </div>

{{-- Блок добавления в корзину --}}
<div class="bg-white rounded-2xl shadow-sm border p-6">
    <h3 class="font-bold text-lg mb-4">Добавить в корзину</h3>
    
    <form action="{{ route('cart.add') }}" method="POST">
        @csrf
        <input type="hidden" name="product_id" value="{{ $product->id }}">
        
        <div class="mb-4">
            <label class="block text-sm font-medium text-gray-700 mb-2">Количество (м²)</label>
            <input type="number" name="sqm_needed" id="sqm-needed" value="1" min="0.1" step="0.1"
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500"
                   onchange="calculateBoxes()">
        </div>
        
        @if($product->format && str_contains($product->format, 'x') && $product->pieces_per_box)
        <div class="bg-gray-50 rounded-lg p-4 mb-4">
            <div class="flex justify-between items-center mb-2">
                <span class="text-sm text-gray-600">В одной коробке:</span>
                <span class="font-medium">{{ $product->pieces_per_box }} шт ({{ $product->sqm_per_box ?? '—' }} м²)</span>
            </div>
            <div class="flex justify-between items-center mb-2">
                <span class="text-sm text-gray-600">Вы ввели:</span>
                <span class="font-medium" id="input-sqm">1 м²</span>
            </div>
            <div class="flex justify-between items-center pt-2 border-t">
                <span class="text-sm font-semibold text-gray-700">Итого коробок:</span>
                <span class="text-lg font-bold text-orange-600" id="box-count">1 кор</span>
            </div>
            <input type="hidden" name="box_quantity" id="box-quantity" value="1">
        </div>
        @endif
        
        @else
<input type="hidden" name="box_quantity" id="box-quantity-fallback" value="1">
@endif

<button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 px-6 rounded-xl transition-colors flex items-center justify-center gap-2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
            </svg>
            Добавить в корзину
        </button>
        <p class="text-xs text-gray-500 mt-2 text-center">Товар округляется до целых коробок</p>
    </form>
</div>

                {{-- Кнопки связи --}}
                <div class="flex flex-col sm:flex-row gap-3 pt-4">
                    <a href="https://wa.me/79052050900?text=Здравствуйте, хочу заказать {{ $product->name }} (арт: {{ $product->sku }})" target="_blank" class="flex-1 bg-green-500 hover:bg-green-600 text-white text-center font-bold py-4 px-6 rounded-xl transition-colors flex items-center justify-center gap-2">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.149-.198.297-.768.966-.94 1.164-.173.199-.347.223-.644.075-.297-.149-1.255-.463-2.385-1.475-.882-.788-1.476-1.761-1.645-2.059-.169-.297-.017-.456.13-.606.134-.134.297-.347.446-.52.149-.173.198-.297.297-.496.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.488-.5-.67-.51-.173-.008-.297-.01-.47-.01-.173 0-.445.063-.678.319-.231.247-.882.862-.882 2.107 0 1.246.908 2.452 1.034 2.618.127.166 1.79 2.734 4.342 3.833.607.262 1.082.42 1.453.535.61.177 1.164.152 1.603.093.488-.069 1.512-.619 1.727-1.216.215-.597.215-1.107.151-1.21-.064-.103-.236-.166-.533-.313z"/>
                        </svg>
                        Купить в WhatsApp
                    </a>
                    <a href="tel:+79052050900" class="flex-1 border-2 border-gray-300 hover:bg-gray-50 text-gray-700 text-center font-bold py-4 px-6 rounded-xl transition-colors flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                        Позвонить
                    </a>
                </div>
            </div>

            {{-- Характеристики с иконками --}}
            <div class="bg-white rounded-2xl shadow-sm border p-6">
                <h3 class="font-bold text-lg mb-4">Характеристики</h3>
                <div class="space-y-3">
                    @if($product->format)
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Формат</p>
                                <p class="font-medium">{{ $product->format }}</p>
                            </div>
                        </div>
                    @endif
                    @if($product->color)
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Цвет</p>
                                <p class="font-medium">{{ $product->color }}</p>
                            </div>
                        </div>
                    @endif
                    @if($product->surface)
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Поверхность</p>
                                <p class="font-medium">{{ $product->surface }}</p>
                            </div>
                        </div>
                    @endif
                    @if($product->material_type)
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 bg-amber-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-sm text-gray-500">Материал</p>
                                <p class="font-medium">{{ $product->material_type }}</p>
                            </div>
                        </div>
                    @endif
                </div>
            </div>

            {{-- Визуальные преимущества (как на cersanit.ru) --}}
            <div class="bg-gradient-to-br from-gray-50 to-blue-50 rounded-2xl p-6">
                <h3 class="font-bold text-lg mb-4">Преимущества</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div class="flex flex-col items-center text-center p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-blue-100 rounded-full flex items-center justify-center mb-3">
                            <svg class="w-7 h-7 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-700">Гладкая поверхность</span>
                    </div>
                    <div class="flex flex-col items-center text-center p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-purple-100 rounded-full flex items-center justify-center mb-3">
                            <svg class="w-7 h-7 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-700">Матовая</span>
                    </div>
                    <div class="flex flex-col items-center text-center p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-green-100 rounded-full flex items-center justify-center mb-3">
                            <svg class="w-7 h-7 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-700">5 класс износ.</span>
                    </div>
                    <div class="flex flex-col items-center text-center p-4 bg-white rounded-xl shadow-sm">
                        <div class="w-12 h-12 bg-amber-100 rounded-full flex items-center justify-center mb-3">
                            <svg class="w-7 h-7 text-amber-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </div>
                        <span class="text-sm font-medium text-gray-700">Простота в уходе</span>
                    </div>
                </div>
            </div>

            {{-- Скачать материалы --}}
            @if($parsed['collection_image'])
                <div class="bg-white rounded-2xl shadow-sm border p-6">
                    <h3 class="font-bold text-lg mb-4">Скачать материалы</h3>
                    <a href="{{ $parsed['collection_image'] }}" download target="_blank" class="flex items-center gap-3 p-4 bg-gray-50 hover:bg-blue-50 rounded-xl transition-colors group">
                        <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <p class="font-medium text-gray-900 group-hover:text-blue-600">Каталог коллекции</p>
                            <p class="text-sm text-gray-500">PDF, скачать бесплатно</p>
                        </div>
                        <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 20l-5.447-2.724A1 1 0 013 16.382V5.618a1 1 0 011.447-.894L9 7m0 13l6-3m-6 3V7m6 10l4.553 2.276A1 1 0 0121 18.382V7.618a1 1 0 01-.553-.894L15 7m0 13V7"/>
                        </svg>
                    </a>
                </div>
            @endif
        </div>
    </div>

    {{-- Описание --}}
    @if(count($parsed['text_lines']) > 0)
        <div class="mt-12 bg-white rounded-2xl shadow-sm border p-8">
            <h2 class="text-xl font-bold mb-4">Описание</h2>
            <div class="prose max-w-none text-gray-700 space-y-3">
                @foreach($parsed['text_lines'] as $line)
                    <p>{{ $line }}</p>
                @endforeach
            </div>
        </div>
    @endif

    {{-- В интерьере (если есть изображения) --}}
    @if($parsed['collection_image'] || count($parsed['technical_images']) > 1)
        <div class="mt-12 bg-gradient-to-r from-blue-50 to-purple-50 rounded-2xl p-8">
            <h2 class="text-2xl font-bold mb-6 text-center">В интерьере</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                @if($parsed['collection_image'])
                    <div class="aspect-square rounded-xl overflow-hidden shadow-lg">
                        <img src="{{ $parsed['collection_image'] }}" alt="В интерьере" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                    </div>
                @endif
                @foreach(array_slice($parsed['technical_images'], 0, 3) as $img)
                    <div class="aspect-square rounded-xl overflow-hidden shadow-lg">
                        <img src="{{ $img }}" alt="В интерьере" class="w-full h-full object-cover hover:scale-110 transition-transform duration-500">
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    {{-- Товары из коллекции --}}
    @if(isset($relatedProducts) && $relatedProducts->count() > 0)
        <div class="mt-12">
            <h2 class="text-2xl font-bold mb-6">Товары из коллекции "{{ $product->collection }}"</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($relatedProducts as $relatedProduct)
                    @php $rPrice = round($relatedProduct->price_retail * 0.8); @endphp
                    <div class="bg-white rounded-xl shadow-sm border overflow-hidden group hover:shadow-xl transition-all">
                        <a href="{{ route('product.show', ['sku' => $relatedProduct->sku]) }}" class="block">
                            <div class="relative aspect-square overflow-hidden bg-gray-100">
                                @if($relatedProduct->main_image)
                                    <img src="{{ $relatedProduct->main_image }}" alt="{{ $relatedProduct->name }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                                @else
                                    <div class="w-full h-full flex items-center justify-center bg-gradient-to-br from-gray-100 to-gray-200">
                                        <svg class="w-16 h-16 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                        </svg>
                                    </div>
                                @endif
                                @if($relatedProduct->stock_yanino > 0)
                                    <div class="absolute top-3 left-3 bg-green-500 text-white px-3 py-1 rounded-full text-xs font-medium shadow-lg">
                                        В наличии
                                    </div>
                                @elseif($relatedProduct->stock_factory > 0)
                                    <div class="absolute top-3 left-3 bg-blue-500 text-white px-3 py-1 rounded-full text-xs font-medium shadow-lg">
                                        Под заказ
                                    </div>
                                @endif
                                @if($relatedProduct->price_retail > $rPrice)
                                    <div class="absolute top-3 right-3 bg-red-500 text-white px-2 py-1 rounded-lg text-xs font-bold shadow-lg">
                                        -{{ number_format((($relatedProduct->price_retail - $rPrice) / $relatedProduct->price_retail) * 100, 0) }}%
                                    </div>
                                @endif
                            </div>
                            <div class="p-4">
                                <p class="text-sm text-gray-500 mb-1">{{ $relatedProduct->format ?? '' }}</p>
                                <h3 class="font-semibold text-gray-900 mb-2 line-clamp-2 group-hover:text-blue-600 transition-colors">{{ $relatedProduct->name }}</h3>
                                <div class="flex items-baseline gap-2 flex-wrap">
                                    <span class="text-xl font-bold text-gray-900">{{ number_format($rPrice, 0, '.', ' ') }} ₽</span>
                                    @if($relatedProduct->price_retail > $rPrice)
                                        <span class="text-sm text-gray-400 line-through">{{ number_format($relatedProduct->price_retail, 0, '.', ' ') }} ₽</span>
                                    @endif
                                </div>
                                <p class="text-xs text-gray-500 mt-1">/м²</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="mt-6 text-center">
                <a href="{{ route('collection.show', ['collection' => urlencode($product->collection)]) }}" class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-xl transition-colors">
                    Смотреть всю коллекцию
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    @endif
</div>
@endsection

@push('scripts')
<script>
function calculateBoxes() {
    const sqmNeeded = parseFloat(document.getElementById('sqm-needed')?.value) || 0;
    const sqmPerBox = {{ $product->sqm_per_box ?? 1 }};
    
    if (sqmPerBox > 0) {
        const boxes = Math.ceil(sqmNeeded / sqmPerBox);
        
        document.getElementById('input-sqm').textContent = sqmNeeded.toFixed(2) + ' м²';
        document.getElementById('box-count').textContent = boxes + ' кор.';
        document.getElementById('box-quantity').value = boxes;
    }
}

// Initialize on page load
document.addEventListener('DOMContentLoaded', calculateBoxes);
</script>
@endpush
