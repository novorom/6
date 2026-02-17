@extends('layout')

@section('title', $product->name . ' - Купить со скидкой 20% в СПб')
@section('description', 'Керамогранит и плитка ' . $product->name . ' от официального дилера Cersanit со скидкой 20%. Склад в Янино, доставка по СПб.')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    {{-- Хлебные крошки --}}
    <nav class="flex mb-8 text-sm text-gray-500">
        <a href="{{ route('home') }}" class="hover:text-blue-600 transition-colors">Главная</a>
        <span class="mx-2">/</span>
        <a href="{{ route('catalog.index') }}" class="hover:text-blue-600 transition-colors">Каталог</a>
        <span class="mx-2">/</span>
        <span class="text-gray-900 font-medium">{{ $product->name }}</span>
    </nav>

    {{-- ОСНОВНОЙ КОНТЕНТ --}}
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 mb-12">
        
        {{-- ЛЕВАЯ ЧАСТЬ: Галерея --}}
        <div>
            {{-- Главное фото --}}
            <div class="bg-gray-50 rounded-2xl overflow-hidden aspect-square mb-4 border border-gray-100 flex items-center justify-center relative">
                @php
                    $hasImage = false;
                    $imageSrc = '';
                    
                    if (!empty($product->images) && is_array($product->images) && count($product->images) > 0) {
                        $imageSrc = asset($product->images[0]);
                        $hasImage = true;
                    } elseif (file_exists(public_path('storage/products/' . $product->sku . '.jpg'))) {
                        $imageSrc = asset('storage/products/' . $product->sku . '.jpg');
                        $hasImage = true;
                    }
                @endphp
                
                @if($hasImage)
                    <img id="main-image" src="{{ $imageSrc }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                @else
                    <div class="text-center text-gray-400 p-12">
                        <svg class="w-24 h-24 mx-auto mb-4 opacity-30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="text-lg font-bold uppercase tracking-widest text-gray-500">{{ $product->collection }}</span>
                        <p class="text-sm mt-2 text-gray-400">Фото скоро появится</p>
                    </div>
                @endif
                
                {{-- Бейдж скидки --}}
                <div class="absolute top-4 left-4 bg-red-500 text-white font-bold px-3 py-1 rounded-lg shadow-lg">
                    -20%
                </div>
            </div>

            {{-- Миниатюры (если есть несколько фото) --}}
            @if(!empty($product->images) && is_array($product->images) && count($product->images) > 1)
                <div class="grid grid-cols-4 gap-4">
                    @foreach($product->images as $img)
                        <div class="aspect-square bg-gray-50 rounded-xl overflow-hidden cursor-pointer border-2 border-transparent hover:border-blue-500 transition-colors">
                            <img src="{{ asset($img) }}" class="w-full h-full object-cover thumbnail-img" onclick="document.getElementById('main-image').src=this.src">
                        </div>
                    @endforeach
                </div>
            @endif
        </div>

        {{-- ПРАВАЯ ЧАСТЬ: Информация --}}
        <div>
            {{-- Заголовок --}}
            <div class="mb-6">
                <div class="text-sm text-gray-500 mb-2">
                    <span class="font-semibold uppercase tracking-wider">{{ $product->collection }}</span>
                    <span class="mx-2">|</span>
                    <span>Артикул: <strong class="font-mono text-gray-900">{{ $product->sku }}</strong></span>
                </div>
                <h1 class="text-3xl sm:text-4xl font-extrabold text-gray-900 leading-tight">
                    {{ $product->name }}
                </h1>
            </div>

            {{-- Цена --}}
            <div class="bg-gradient-to-br from-orange-50 to-orange-100 p-6 rounded-2xl mb-6 border border-orange-200">
                <div class="text-sm text-gray-600 line-through mb-1">
                    РРЦ: {{ number_format($product->price_official, 0, '', ' ') }} ₽
                </div>
                <div class="flex items-end gap-4 mb-2">
                    <div class="text-4xl font-black text-gray-900 leading-none">
                        {{ number_format($product->price_retail, 0, '', ' ') }} ₽
                        <span class="text-lg font-normal text-gray-600">/м²</span>
                    </div>
                </div>
                <div class="text-sm font-semibold text-green-700">
                    Выгода {{ number_format($product->price_official - $product->price_retail, 0, '', ' ') }} ₽/м²
                </div>
            </div>

            {{-- Наличие на складах --}}
            <div class="mb-8">
                <h3 class="text-sm font-bold text-gray-900 uppercase tracking-wider mb-3">
                    Наличие на складах
                </h3>
                
                @php $totalStock = $product->stock_yanino + $product->stock_factory; @endphp
                
                @if($totalStock > 0)
                    <div class="space-y-3">
                        @if($product->stock_yanino > 0)
                            <div class="flex items-center justify-between bg-green-50 border border-green-200 p-4 rounded-xl">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-green-900">Склад Янино</div>
                                        <div class="text-sm text-green-700">Самовывоз сегодня</div>
                                    </div>
                                </div>
                                <div class="font-mono font-bold text-green-700 text-lg">
                                    {{ rtrim(rtrim(number_format($product->stock_yanino, 2, '.', ''), '0'), '.') }} м²
                                </div>
                            </div>
                        @endif

                        @if($product->stock_factory > 0)
                            <div class="flex items-center justify-between bg-blue-50 border border-blue-200 p-4 rounded-xl">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center flex-shrink-0">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <div class="font-semibold text-blue-900">Склад Завод</div>
                                        <div class="text-sm text-blue-700">Доставка 7 дней</div>
                                    </div>
                                </div>
                                <div class="font-mono font-bold text-blue-700 text-lg">
                                    {{ rtrim(rtrim(number_format($product->stock_factory, 2, '.', ''), '0'), '.') }} м²
                                </div>
                            </div>
                        @endif
                    </div>
                @else
                    <div class="flex items-center gap-3 bg-red-50 border border-red-200 p-4 rounded-xl">
                        <svg class="w-6 h-6 text-red-500 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-red-700 font-semibold">Временно нет в наличии</span>
                    </div>
                @endif
            </div>

            {{-- Кнопки связи --}}
            <div class="space-y-3 mb-8">
                <a href="https://wa.me/79052050900?text=Здравствуйте! Интересует {{ $product->name }} (арт. {{ $product->sku }})" 
                   target="_blank"
                   class="flex items-center justify-center gap-3 w-full bg-green-600 hover:bg-green-700 text-white font-semibold py-4 px-6 rounded-xl transition duration-200 shadow-lg hover:shadow-xl">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                    Заказать в WhatsApp
                </a>
                
                <a href="tel:+79052050900" 
                   class="flex items-center justify-center gap-3 w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-4 px-6 rounded-xl transition duration-200 shadow-lg hover:shadow-xl">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    Позвонить +7 (905) 205-09-00
                </a>
            </div>

            {{-- Иконки преимуществ --}}
            <div class="grid grid-cols-2 gap-3">
                @if($product->surface == 'рельефная' || $product->surface == 'матовая')
                <div class="flex items-center gap-2 text-sm text-gray-700 bg-gray-50 p-3 rounded-lg">
                    <svg class="w-5 h-5 text-gray-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span>{{ ucfirst($product->surface) }} поверхность</span>
                </div>
                @endif
                
                <div class="flex items-center gap-2 text-sm text-gray-700 bg-gray-50 p-3 rounded-lg">
                    <svg class="w-5 h-5 text-gray-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span>Морозостойкость</span>
                </div>
                
                <div class="flex items-center gap-2 text-sm text-gray-700 bg-gray-50 p-3 rounded-lg">
                    <svg class="w-5 h-5 text-gray-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span>Класс износостойкости 4</span>
                </div>
                
                <div class="flex items-center gap-2 text-sm text-gray-700 bg-gray-50 p-3 rounded-lg">
                    <svg class="w-5 h-5 text-gray-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span>Для теплого пола</span>
                </div>
            </div>
        </div>
    </div>

    {{-- ТАБЫ: Характеристики / Описание --}}
    <div class="bg-white rounded-2xl shadow-md overflow-hidden">
        <div class="border-b border-gray-200">
            <nav class="flex">
                <button onclick="openTab(event, 'characteristics')" class="tab-button active px-8 py-4 text-lg font-semibold border-b-4 border-orange-500 text-gray-900">
                    Характеристики
                </button>
                <button onclick="openTab(event, 'description')" class="tab-button px-8 py-4 text-lg font-semibold border-b-4 border-transparent text-gray-500 hover:text-gray-900">
                    Описание
                </button>
            </nav>
        </div>

        {{-- Вкладка: Характеристики --}}
        <div id="characteristics" class="tab-content p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-12 gap-y-1">
                <div class="flex justify-between py-3 border-b border-gray-100">
                    <dt class="text-gray-600">Коллекция</dt>
                    <dd class="font-semibold text-gray-900">{{ $product->collection }}</dd>
                </div>
                
                <div class="flex justify-between py-3 border-b border-gray-100">
                    <dt class="text-gray-600">Артикул</dt>
                    <dd class="font-mono font-semibold text-gray-900">{{ $product->sku }}</dd>
                </div>
                
                <div class="flex justify-between py-3 border-b border-gray-100">
                    <dt class="text-gray-600">Размер, см</dt>
                    <dd class="font-semibold text-gray-900">{{ $product->format }}</dd>
                </div>
                
                <div class="flex justify-between py-3 border-b border-gray-100">
                    <dt class="text-gray-600">Цвет</dt>
                    <dd class="font-semibold text-gray-900">{{ ucfirst($product->color) }}</dd>
                </div>
                
                <div class="flex justify-between py-3 border-b border-gray-100">
                    <dt class="text-gray-600">Поверхность</dt>
                    <dd class="font-semibold text-gray-900">{{ ucfirst($product->surface) }}</dd>
                </div>
                
                <div class="flex justify-between py-3 border-b border-gray-100">
                    <dt class="text-gray-600">Применение</dt>
                    <dd class="font-semibold text-gray-900">{{ $product->application }}</dd>
                </div>
                
                <div class="flex justify-between py-3 border-b border-gray-100">
                    <dt class="text-gray-600">Материал</dt>
                    <dd class="font-semibold text-gray-900">Керамогранит</dd>
                </div>
                
                <div class="flex justify-between py-3 border-b border-gray-100">
                    <dt class="text-gray-600">Бренд</dt>
                    <dd class="font-semibold text-gray-900">Cersanit</dd>
                </div>
                
                <div class="flex justify-between py-3 border-b border-gray-100">
                    <dt class="text-gray-600">Морозостойкость</dt>
                    <dd class="font-semibold text-gray-900">Да</dd>
                </div>
                
                <div class="flex justify-between py-3 border-b border-gray-100">
                    <dt class="text-gray-600">Класс износостойкости</dt>
                    <dd class="font-semibold text-gray-900">4</dd>
                </div>
                
                <div class="flex justify-between py-3 border-b border-gray-100">
                    <dt class="text-gray-600">Класс антискольжения</dt>
                    <dd class="font-semibold text-gray-900">R10</dd>
                </div>
                
                <div class="flex justify-between py-3 border-b border-gray-100">
                    <dt class="text-gray-600">Водопоглощение</dt>
                    <dd class="font-semibold text-gray-900">Низкое (&lt;0.5%)</dd>
                </div>
                
                <div class="flex justify-between py-3 border-b border-gray-100">
                    <dt class="text-gray-600">Теплый пол</dt>
                    <dd class="font-semibold text-gray-900">Совместим</dd>
                </div>
                
                <div class="flex justify-between py-3 border-b border-gray-100">
                    <dt class="text-gray-600">Толщина, см</dt>
                    <dd class="font-semibold text-gray-900">0.8</dd>
                </div>
                
                <div class="flex justify-between py-3 border-b border-gray-100">
                    <dt class="text-gray-600">Технология производства</dt>
                    <dd class="font-semibold text-gray-900">Полусухое прессование</dd>
                </div>
                
                <div class="flex justify-between py-3 border-b border-gray-100">
                    <dt class="text-gray-600">Страна производства</dt>
                    <dd class="font-semibold text-gray-900">Россия / Польша</dd>
                </div>
            </div>
        </div>

        {{-- Вкладка: Описание --}}
        <div id="description" class="tab-content hidden p-8">
            <div class="prose max-w-none">
                <p class="text-gray-700 leading-relaxed text-lg mb-4">
                    Керамогранит <strong>{{ $product->name }}</strong> из коллекции <strong>{{ $product->collection }}</strong> – это высококачественный отделочный материал от ведущего европейского производителя Cersanit.
                </p>
                
                <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Технические характеристики</h3>
                <ul class="space-y-2 text-gray-700">
                    <li>✓ <strong>Размер:</strong> {{ $product->format }} см</li>
                    <li>✓ <strong>Цвет:</strong> {{ $product->color }}</li>
                    <li>✓ <strong>Поверхность:</strong> {{ $product->surface }}</li>
                    <li>✓ <strong>Применение:</strong> {{ $product->application }}</li>
                </ul>
                
                <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Преимущества керамогранита Cersanit</h3>
                <ul class="space-y-2 text-gray-700">
                    <li>✓ <strong>Высокая износостойкость</strong> класса 4 – подходит для мест с интенсивным движением</li>
                    <li>✓ <strong>Морозостойкость</strong> – можно использовать для наружной отделки</li>
                    <li>✓ <strong>Низкое водопоглощение</strong> (&lt;0.5%) – идеально для влажных помещений</li>
                    <li>✓ <strong>Совместимость с теплым полом</strong> – равномерная теплопередача</li>
                    <li>✓ <strong>Легкость в уходе</strong> – достаточно обычных моющих средств</li>
                    <li>✓ <strong>Экологичность</strong> – безопасен для здоровья, не выделяет вредных веществ</li>
                </ul>
                
                <h3 class="text-xl font-bold text-gray-900 mt-6 mb-3">Где купить в Санкт-Петербурге</h3>
                <p class="text-gray-700 leading-relaxed">
                    Купить <strong>{{ $product->name }}</strong> в Санкт-Петербурге можно в нашем салоне-складе в Янино со скидкой 20% от РРЦ. 
                    В наличии на складе <strong>{{ $product->stock_yanino > 0 ? $product->stock_yanino . ' м²' : 'под заказ' }}</strong>. 
                    Доставка по СПб и Ленинградской области.
                </p>
                
                <div class="bg-orange-50 border-l-4 border-orange-500 p-4 mt-6">
                    <p class="text-orange-900 font-semibold">
                        💰 Цена {{ $product->name }}: <span class="text-2xl">{{ number_format($product->price_retail, 0, '', ' ') }} ₽/м²</span>
                        <span class="text-sm text-orange-700">(РРЦ {{ number_format($product->price_official, 0, '', ' ') }} ₽/м²)</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- JavaScript для табов --}}
<script>
function openTab(evt, tabName) {
    // Скрыть все вкладки
    var tabContents = document.getElementsByClassName("tab-content");
    for (var i = 0; i < tabContents.length; i++) {
        tabContents[i].classList.add('hidden');
    }
    
    // Убрать активный класс со всех кнопок
    var tabButtons = document.getElementsByClassName("tab-button");
    for (var i = 0; i < tabButtons.length; i++) {
        tabButtons[i].classList.remove('active', 'border-orange-500', 'text-gray-900');
        tabButtons[i].classList.add('border-transparent', 'text-gray-500');
    }
    
    // Показать текущую вкладку и активировать кнопку
    document.getElementById(tabName).classList.remove('hidden');
    evt.currentTarget.classList.add('active', 'border-orange-500', 'text-gray-900');
    evt.currentTarget.classList.remove('border-transparent', 'text-gray-500');
}
</script>
@endsection