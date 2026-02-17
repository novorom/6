@extends('layout')

@section('title', 'Cersanit Янино - Официальный дилер в СПб | Цены на 20% ниже')

@section('meta_description', 'Официальный дилер Cersanit в СПб. Керамогранит и плитка на 20% дешевле официальных цен. Склад в Янино, самовывоз сегодня. Доставка по СПБ от 500₽.')

@section('content')

{{-- HERO СЕКЦИЯ --}}
<section class="bg-gradient-to-br from-blue-600 to-blue-800 text-white py-20">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-5xl font-bold mb-6">
                🏆 CERSANIT ЯНИНО
            </h1>
            <p class="text-2xl mb-4">Официальный дилер в Санкт-Петербурге</p>
            
            <div class="bg-yellow-400 text-blue-900 inline-block px-8 py-4 rounded-lg text-3xl font-bold mb-8">
                ⚡ ЦЕНЫ НА 20% НИЖЕ ОФИЦИАЛЬНЫХ
            </div>

            <div class="grid md:grid-cols-3 gap-6 mb-8 text-lg">
                <div class="bg-white/10 backdrop-blur rounded-lg p-4">
                    <div class="text-3xl mb-2">📦</div>
                    <div>Склад в Янино</div>
                    <div class="text-sm opacity-80">Самовывоз сегодня</div>
                </div>
                <div class="bg-white/10 backdrop-blur rounded-lg p-4">
                    <div class="text-3xl mb-2">🚚</div>
                    <div>Доставка по СПб</div>
                    <div class="text-sm opacity-80">От 500₽</div>
                </div>
                <div class="bg-white/10 backdrop-blur rounded-lg p-4">
                    <div class="text-3xl mb-2">🏭</div>
                    <div>С завода</div>
                    <div class="text-sm opacity-80">За 7 дней</div>
                </div>
            </div>

            <div class="flex gap-4 justify-center flex-wrap">
                <a href="/catalog" class="bg-white text-blue-900 px-8 py-4 rounded-lg font-bold text-xl hover:bg-gray-100 transition">
                    📋 КАТАЛОГ (201 товар)
                </a>
                <a href="https://wa.me/{{ env('CONTACT_WHATSAPP') }}" target="_blank" class="bg-green-500 text-white px-8 py-4 rounded-lg font-bold text-xl hover:bg-green-600 transition">
                    💬 WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>

{{-- КАЛЬКУЛЯТОР --}}
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-lg p-8">
            <h2 class="text-3xl font-bold mb-6 text-center">🧮 Калькулятор плитки</h2>
            <p class="text-gray-600 text-center mb-8">Рассчитайте сколько нужно плитки и сэкономьте!</p>

            <div id="calculator" x-data="calculator()">
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium mb-2">Площадь помещения (м²)</label>
                        <input type="number" 
                               x-model="area" 
                               @input="calculate()"
                               class="w-full px-4 py-3 border rounded-lg text-lg"
                               placeholder="Например: 15">
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-2">Размер плитки</label>
                        <select x-model="tileSize" 
                                @change="calculate()"
                                class="w-full px-4 py-3 border rounded-lg text-lg">
                            <option value="45x90">45x90 см (крупноформат)</option>
                            <option value="60x60">60x60 см (популярный)</option>
                            <option value="30x60">30x60 см (универсальный)</option>
                            <option value="20x90">20x90 см (под дерево)</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-medium mb-2">Запас на подрезку</label>
                        <select x-model="reserve" 
                                @change="calculate()"
                                class="w-full px-4 py-3 border rounded-lg text-lg">
                            <option value="5">5% (ровная укладка)</option>
                            <option value="10">10% (обычная укладка)</option>
                            <option value="15">15% (сложная укладка)</option>
                        </select>
                    </div>
                </div>

                <template x-if="area > 0">
                    <div class="mt-8 bg-gradient-to-r from-blue-50 to-blue-100 rounded-lg p-6">
                        <div class="text-center mb-4">
                            <div class="text-lg text-gray-600">Вам потребуется:</div>
                            <div class="text-4xl font-bold text-blue-900 my-2" x-text="tilesNeeded + ' плиток'"></div>
                            <div class="text-xl text-gray-700" x-text="packagesNeeded + ' упаковок'"></div>
                        </div>

                        <div class="border-t border-blue-200 pt-4 mt-4">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-600">Средняя цена РРЦ:</span>
                                <span class="text-xl line-through text-gray-500" x-text="officialPrice + '₽'"></span>
                            </div>
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-gray-600">Наша цена:</span>
                                <span class="text-2xl font-bold text-green-600" x-text="ourPrice + '₽'"></span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span class="font-bold text-blue-900">Вы экономите:</span>
                                <span class="text-2xl font-bold text-yellow-600" x-text="savings + '₽'"></span>
                            </div>
                        </div>

                        <div class="mt-6 text-center">
                            <a :href="'https://wa.me/{{ env('CONTACT_WHATSAPP') }}?text=Здравствуйте! Нужна плитка ' + tileSize + ', площадь ' + area + ' м². Рассчитали ' + tilesNeeded + ' плиток.'" 
                               target="_blank"
                               class="inline-block bg-green-500 text-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-green-600 transition">
                                📱 ЗАКАЗАТЬ В WHATSAPP
                            </a>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>
</section>

{{-- ХИТ ПРОДАЖ --}}
<section class="py-16">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-12">🔥 Хит продаж</h2>
        
        <div class="grid md:grid-cols-3 gap-8">
            @foreach($bestsellers as $product)
            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition group">
                <div class="relative">
                    @if($product->main_image)
                    <img src="{{ $product->main_image }}" alt="{{ $product->name }}" class="w-full h-64 object-cover">
                    @else
                    <div class="w-full h-64 bg-gray-200 flex items-center justify-center">
                        <span class="text-gray-400 text-6xl">🏺</span>
                    </div>
                    @endif
                    
                    <div class="absolute top-4 right-4 bg-red-500 text-white px-4 py-2 rounded-lg font-bold">
                        -20%
                    </div>
                </div>

                <div class="p-6">
                    <h3 class="font-bold text-xl mb-2 group-hover:text-blue-600 transition">
                        {{ $product->collection }}
                    </h3>
                    <p class="text-gray-600 mb-4">{{ $product->format }} см</p>

                    <div class="mb-4">
                        <div class="flex items-baseline gap-2">
                            <span class="text-sm text-gray-500 line-through">{{ number_format($product->price_official, 0, '.', ' ') }}₽</span>
                            <span class="text-2xl font-bold text-green-600">{{ number_format($product->price_retail, 0, '.', ' ') }}₽</span>
                            <span class="text-xs text-gray-500">/м²</span>
                        </div>
                        <div class="text-sm text-yellow-600 font-medium">
                            Экономия: {{ number_format($product->discount_amount, 0, '.', ' ') }}₽
                        </div>
                    </div>

                    <div class="flex gap-2">
                        <a href="/products/{{ $product->slug }}" class="flex-1 bg-blue-600 text-white text-center px-4 py-3 rounded-lg font-bold hover:bg-blue-700 transition">
                            Подробнее
                        </a>
                        <a href="https://wa.me/{{ env('CONTACT_WHATSAPP') }}?text=Интересует {{ $product->collection }} {{ $product->format }}" 
                           target="_blank"
                           class="bg-green-500 text-white px-4 py-3 rounded-lg hover:bg-green-600 transition">
                            💬
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="/catalog" class="inline-block bg-blue-600 text-white px-12 py-4 rounded-lg font-bold text-xl hover:bg-blue-700 transition">
                📋 Смотреть весь каталог (201 товар)
            </a>
        </div>
    </div>
</section>

{{-- ПОЧЕМУ МЫ --}}
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-12">💪 Почему выбирают нас?</h2>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <div class="bg-white rounded-lg p-6 shadow-md">
                <div class="text-4xl mb-4">🏆</div>
                <h3 class="font-bold text-xl mb-2">Официальный дилер</h3>
                <p class="text-gray-600">Работаем напрямую с Cersanit с 2018 года. Вся продукция сертифицирована.</p>
            </div>

            <div class="bg-white rounded-lg p-6 shadow-md">
                <div class="text-4xl mb-4">💰</div>
                <h3 class="font-bold text-xl mb-2">-20% ВСЕГДА</h3>
                <p class="text-gray-600">Не нужно ждать "черную пятницу". Наша цена всегда на 20% ниже официальной.</p>
            </div>

            <div class="bg-white rounded-lg p-6 shadow-md">
                <div class="text-4xl mb-4">📍</div>
                <h3 class="font-bold text-xl mb-2">Склад в Янино</h3>
                <p class="text-gray-600">Приезжайте посмотреть образцы вживую. Самовывоз в день обращения.</p>
            </div>

            <div class="bg-white rounded-lg p-6 shadow-md">
                <div class="text-4xl mb-4">🧮</div>
                <h3 class="font-bold text-xl mb-2">Поможем рассчитать</h3>
                <p class="text-gray-600">Бесплатно рассчитаем количество плитки для вашего помещения.</p>
            </div>

            <div class="bg-white rounded-lg p-6 shadow-md">
                <div class="text-4xl mb-4">✅</div>
                <h3 class="font-bold text-xl mb-2">Честная цена</h3>
                <p class="text-gray-600">Никаких скрытых доплат. Цена на сайте = цена при покупке.</p>
            </div>

            <div class="bg-white rounded-lg p-6 shadow-md">
                <div class="text-4xl mb-4">🚚</div>
                <h3 class="font-bold text-xl mb-2">Быстрая доставка</h3>
                <p class="text-gray-600">По СПб от 500₽. С завода — за 7 дней.</p>
            </div>
        </div>
    </div>
</section>

{{-- КОНТАКТЫ --}}
<section class="py-16 bg-blue-900 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-8">📞 Остались вопросы?</h2>
        
        <div class="flex flex-wrap justify-center gap-4 mb-8">
            <a href="tel:{{ env('CONTACT_PHONE') }}" class="bg-white text-blue-900 px-8 py-4 rounded-lg font-bold text-xl hover:bg-gray-100 transition">
                📞 {{ env('CONTACT_PHONE') }}
            </a>
            <a href="https://wa.me/{{ env('CONTACT_WHATSAPP') }}" target="_blank" class="bg-green-500 text-white px-8 py-4 rounded-lg font-bold text-xl hover:bg-green-600 transition">
                💬 WhatsApp
            </a>
            <a href="https://t.me/{{ env('CONTACT_TELEGRAM') }}" target="_blank" class="bg-blue-500 text-white px-8 py-4 rounded-lg font-bold text-xl hover:bg-blue-600 transition">
                ✈️ Telegram
            </a>
        </div>

        <div class="text-lg opacity-90">
            <p class="mb-2">📍 Склад: {{ env('WAREHOUSE_ADDRESS', 'Янино-1, Ленинградская область') }}</p>
            <p>🕐 Пн-Пт: 9:00-18:00, Сб-Вс: 10:00-16:00</p>
        </div>
    </div>
</section>

@push('scripts')
<script>
function calculator() {
    return {
        area: '',
        tileSize: '45x90',
        reserve: 10,
        tilesNeeded: 0,
        packagesNeeded: '',
        officialPrice: 0,
        ourPrice: 0,
        savings: 0,

        calculate() {
            if (!this.area || this.area <= 0) {
                return;
            }

            // Размеры плитки в метрах
            const sizes = {
                '45x90': { w: 0.45, h: 0.90, perPack: 6, avgOfficialPrice: 1890, avgOurPrice: 1512 },
                '60x60': { w: 0.60, h: 0.60, perPack: 4, avgOfficialPrice: 1450, avgOurPrice: 1160 },
                '30x60': { w: 0.30, h: 0.60, perPack: 10, avgOfficialPrice: 950, avgOurPrice: 760 },
                '20x90': { w: 0.20, h: 0.90, perPack: 8, avgOfficialPrice: 1350, avgOurPrice: 1080 }
            };

            const tile = sizes[this.tileSize];
            const tileArea = tile.w * tile.h; // Площадь одной плитки
            const areaWithReserve = parseFloat(this.area) * (1 + this.reserve / 100);
            
            // Количество плиток
            this.tilesNeeded = Math.ceil(areaWithReserve / tileArea);
            
            // Количество упаковок
            const packages = Math.ceil(this.tilesNeeded / tile.perPack);
            this.packagesNeeded = packages + ' упак.';
            
            // Стоимость
            this.officialPrice = Math.round(parseFloat(this.area) * tile.avgOfficialPrice);
            this.ourPrice = Math.round(parseFloat(this.area) * tile.avgOurPrice);
            this.savings = this.officialPrice - this.ourPrice;
            
            // Форматирование чисел
            this.officialPrice = this.officialPrice.toLocaleString('ru-RU');
            this.ourPrice = this.ourPrice.toLocaleString('ru-RU');
            this.savings = this.savings.toLocaleString('ru-RU');
        }
    }
}
</script>
@endpush

@endsection
