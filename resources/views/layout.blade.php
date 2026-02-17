<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    {{-- SEO --}}
    <title>@yield('title', 'Cersanit Янино - Официальный дилер в СПб | -20% от цены')</title>
    <meta name="description" content="@yield('meta_description', 'Керамогранит и плитка Cersanit со скидкой 20% от официальной цены. Склад в Янино, доставка по СПб.')">
    <meta name="keywords" content="@yield('meta_keywords', 'cersanit, церсанит, плитка, керамогранит, янино, спб, купить, цена, дилер')">
    
    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('title', 'Cersanit Янино')">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:site_name" content="Cersanit Янино">
    
    {{-- Canonical --}}
    <link rel="canonical" href="{{ url()->current() }}">
    
    {{-- Favicon --}}
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">
    
    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>
    
    {{-- Alpine.js для интерактива --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    {{-- Дополнительные стили --}}
    @stack('styles')
</head>
<body class="bg-gray-50">
    {{-- HEADER --}}
    <header class="bg-white shadow-sm sticky top-0 z-40">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between h-20">
                {{-- Логотип --}}
                <a href="/" class="flex items-center gap-3">
                    <div class="text-3xl">🏆</div>
                    <div>
                        <div class="font-bold text-xl text-blue-900">CERSANIT ЯНИНО</div>
                        <div class="text-xs text-gray-600">Официальный дилер СПб</div>
                    </div>
                </a>

                {{-- Навигация Desktop --}}
                <nav class="hidden md:flex items-center gap-6">
                    <a href="/" class="hover:text-blue-600 transition font-medium">Главная</a>
                    <a href="/catalog" class="hover:text-blue-600 transition font-medium">Каталог</a>
                    <a href="/catalog?type=keramogranit" class="hover:text-blue-600 transition font-medium">Керамогранит</a>
                    <a href="/catalog?type=plitka" class="hover:text-blue-600 transition font-medium">Плитка</a>
                    <a href="#contacts" class="hover:text-blue-600 transition font-medium">Контакты</a>
                </nav>

                {{-- Контакты Desktop --}}
                <div class="hidden md:flex items-center gap-4">
                    <a href="tel:{{ env('CONTACT_PHONE') }}" class="text-blue-900 font-bold hover:text-blue-700 transition">
                        📞 {{ env('CONTACT_PHONE') }}
                    </a>
                    <a href="https://wa.me/{{ env('CONTACT_WHATSAPP') }}" 
                       target="_blank"
                       class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">
                        💬 WhatsApp
                    </a>
                </div>

                {{-- Бургер-меню Mobile --}}
                <button @click="mobileMenu = !mobileMenu" 
                        x-data="{ mobileMenu: false }"
                        class="md:hidden text-3xl">
                    ☰
                </button>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div x-show="mobileMenu" 
             x-data="{ mobileMenu: false }"
             class="md:hidden bg-white border-t"
             style="display: none;">
            <nav class="container mx-auto px-4 py-4 space-y-2">
                <a href="/" class="block py-2 hover:bg-gray-50 rounded px-2">Главная</a>
                <a href="/catalog" class="block py-2 hover:bg-gray-50 rounded px-2">Каталог</a>
                <a href="/catalog?type=keramogranit" class="block py-2 hover:bg-gray-50 rounded px-2">Керамогранит</a>
                <a href="/catalog?type=plitka" class="block py-2 hover:bg-gray-50 rounded px-2">Плитка</a>
                <a href="#contacts" class="block py-2 hover:bg-gray-50 rounded px-2">Контакты</a>
                <a href="tel:{{ env('CONTACT_PHONE') }}" class="block py-2 bg-blue-100 rounded px-2 font-bold">
                    📞 {{ env('CONTACT_PHONE') }}
                </a>
            </nav>
        </div>
    </header>

    {{-- MAIN CONTENT --}}
    <main>
        @yield('content')
    </main>

    {{-- FOOTER --}}
    <footer class="bg-gray-900 text-white py-12" id="contacts">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                {{-- О компании --}}
                <div>
                    <h3 class="font-bold text-lg mb-4">Cersanit Янино</h3>
                    <p class="text-gray-400 text-sm mb-4">
                        Официальный дилер керамической плитки и керамогранита Cersanit в Санкт-Петербурге с 2018 года.
                    </p>
                    <div class="text-yellow-400 font-bold">-20% от РРЦ ВСЕГДА!</div>
                </div>

                {{-- Контакты --}}
                <div>
                    <h3 class="font-bold text-lg mb-4">Контакты</h3>
                    <div class="space-y-2 text-sm">
                        <div>📞 {{ env('CONTACT_PHONE') }}</div>
                        <div>📱 <a href="https://wa.me/{{ env('CONTACT_WHATSAPP') }}" class="hover:text-green-400">WhatsApp</a></div>
                        <div>✈️ <a href="https://t.me/{{ env('CONTACT_TELEGRAM') }}" class="hover:text-blue-400">Telegram</a></div>
                        <div>📧 info@example.com</div>
                    </div>
                </div>

                {{-- Адрес --}}
                <div>
                    <h3 class="font-bold text-lg mb-4">Адрес склада</h3>
                    <div class="text-sm text-gray-400 space-y-1">
                        <div>📍 {{ env('WAREHOUSE_ADDRESS') }}</div>
                        <div class="mt-3">
                            <div class="font-bold text-white">Режим работы:</div>
                            <div>Пн-Пт: 9:00-18:00</div>
                            <div>Сб-Вс: 10:00-16:00</div>
                        </div>
                    </div>
                </div>

                {{-- Информация --}}
                <div>
                    <h3 class="font-bold text-lg mb-4">Информация</h3>
                    <div class="space-y-2 text-sm">
                        <a href="/catalog" class="block hover:text-blue-400">Каталог товаров</a>
                        <a href="/about" class="block hover:text-blue-400">О компании</a>
                        <a href="/delivery" class="block hover:text-blue-400">Доставка и оплата</a>
                        <a href="/contacts" class="block hover:text-blue-400">Контакты</a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-sm text-gray-500">
                <p>&copy; {{ date('Y') }} Cersanit Янино. Все права защищены.</p>
                <p class="mt-2">Официальный дилер Cersanit в Санкт-Петербурге</p>
            </div>
        </div>
    </footer>

    {{-- ВИДЖЕТ МЕССЕНДЖЕРОВ --}}
    @include('components.messenger-widget')

    {{-- Scripts --}}
    @stack('scripts')
</body>
</html>
