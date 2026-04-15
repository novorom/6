<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
 <meta http-equiv="Pragma" content="no-cache">
 <meta http-equiv="Expires" content="0">
 <title>@yield('title', 'CERSANIT ЯНИНО - Официальный дилер в Санкт-Петербурге')</title>
 <meta name="description" content="@yield('meta_description', 'Керамическая плитка и керамогранит Cersanit со скидкой 20% от розницы. Склад в Янино, доставка по СПб и области.')">
 
 {{-- SEO & Verifications --}}
 <meta name="yandex-verification" content="1f85757551ab6b60" />
 <meta name="google-site-verification" content="cersanit-shop-google-val" />
 <link rel="canonical" href="{{ url()->current() }}" />

 @include('components.seo.organization-schema')

 <!-- Fonts -->
 <link rel="preconnect" href="https://fonts.bunny.net">
 <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
 <!-- Styles -->
 @vite('resources/css/app.css')
</head>
<body class="antialiased bg-gray-50 text-gray-800">
 {{-- Header with Mega Menu --}}
 <header class="bg-white border-b border-gray-200 sticky top-0 z-50">
 <div class="container mx-auto px-4">
 <div class="flex items-center justify-between h-16">
 <div class="flex items-center gap-4">
 <button class="lg:hidden p-2 hover:bg-gray-100 rounded-lg">
 <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
 </svg>
 </button>
 <a href="/" class="flex items-center gap-2"><img src="/images/logo.png" alt="CERSANIT" class="h-16 md:h-20 w-auto object-scale-down object-contain"></a>
 </div>

 {{-- Mega Menu --}}
 <nav class="hidden lg:flex items-center gap-6">
 <div class="relative group">
 <a href="{{ route('catalog.index') }}" class="flex items-center gap-1.5 py-4 text-gray-700 font-medium hover:text-orange-600 transition-colors">
 <span>Каталог</span>
 <svg class="w-4 h-4 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24">
 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
 </svg>
 </a>
 {{-- Mega Menu Dropdown --}}
 <div class="absolute left-0 top-full pt-2 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
 <div class="w-[850px] bg-white rounded-xl shadow-2xl border border-gray-100 overflow-hidden">
 <div class="grid grid-cols-4">
 {{-- Column 1: Banner --}}
 <div class="p-6 bg-gradient-to-br from-gray-900 to-gray-800 text-white">
 <a href="{{ route('collections.index') }}" class="block group/link">
 <h4 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-2">ВСЕ КОЛЛЕКЦИИ</h4>
 <p class="text-lg font-bold mb-4">Плитка и керамогранит Cersanit</p>
 <span class="inline-flex items-center text-orange-400 font-medium group-hover/link:text-orange-300">
 Смотреть все
 <svg class="w-4 h-4 ml-1 transition-transform group-hover/link:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
 </svg>
 </span>
 </a>
 </div>
 {{-- Column 2: Типы товаров --}}
 <div class="p-5 border-r border-gray-100">
 <h4 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-4">ВСЕ ТОВАРЫ</h4>
 <ul class="space-y-2.5">
 <li><a href="{{ route('catalog.index', ['categories' => ['ceramic-tile']]) }}" class="block text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 px-2 py-1.5 rounded transition-colors">Керамическая плитка</a></li>
 <li><a href="{{ route('catalog.index', ['categories' => ['ceramic-granite']]) }}" class="block text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 px-2 py-1.5 rounded transition-colors">Керамогранит</a></li>
 <li><a href="{{ route('catalog.index', ['categories' => ['mosaic']]) }}" class="block text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 px-2 py-1.5 rounded transition-colors">Мозаика</a></li>
 <li><a href="{{ route('catalog.index', ['categories' => ['step']]) }}" class="block text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 px-2 py-1.5 rounded transition-colors">Ступени</a></li>
 <li><a href="{{ route('catalog.index', ['categories' => ['border']]) }}" class="block text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 px-2 py-1.5 rounded transition-colors">Бордюры и плинтусы</a></li>
 </ul>
 </div>
 {{-- Column 3: Форматы --}}
 <div class="p-5 border-r border-gray-100">
 <h4 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-4">ФОРМАТ</h4>
 <ul class="space-y-2.5">
 <li><a href="{{ route('catalog.index', ['formats' => ['60x120']]) }}" class="block text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 px-2 py-1.5 rounded transition-colors">60×120</a></li>
 <li><a href="{{ route('catalog.index', ['formats' => ['60x60']]) }}" class="block text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 px-2 py-1.5 rounded transition-colors">60×60</a></li>
 <li><a href="{{ route('catalog.index', ['formats' => ['30x60']]) }}" class="block text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 px-2 py-1.5 rounded transition-colors">30×60</a></li>
 <li><a href="{{ route('catalog.index', ['formats' => ['20x50']]) }}" class="block text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 px-2 py-1.5 rounded transition-colors">20×50</a></li>
 <li><a href="{{ route('catalog.index', ['formats' => ['40x40']]) }}" class="block text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 px-2 py-1.5 rounded transition-colors">40×40</a></li>
 <li><a href="{{ route('catalog.index') }}" class="block text-sm text-orange-600 font-medium hover:text-orange-700 px-2 py-1.5 rounded transition-colors">Все форматы →</a></li>
 </ul>
 </div>
 {{-- Column 4: Цвета --}}
 <div class="p-5">
 <h4 class="text-xs font-bold uppercase tracking-wider text-gray-400 mb-4">ЦВЕТ</h4>
 <ul class="space-y-2.5">
 <li><a href="{{ route('catalog.index', ['colors' => ['бежевый']]) }}" class="block text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 px-2 py-1.5 rounded transition-colors">Бежевый</a></li>
 <li><a href="{{ route('catalog.index', ['colors' => ['белый']]) }}" class="block text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 px-2 py-1.5 rounded transition-colors">Белый</a></li>
 <li><a href="{{ route('catalog.index', ['colors' => ['серый']]) }}" class="block text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 px-2 py-1.5 rounded transition-colors">Серый</a></li>
 <li><a href="{{ route('catalog.index', ['colors' => ['черный']]) }}" class="block text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 px-2 py-1.5 rounded transition-colors">Чёрный</a></li>
 <li><a href="{{ route('catalog.index', ['colors' => ['коричневый']]) }}" class="block text-sm text-gray-700 hover:text-orange-600 hover:bg-orange-50 px-2 py-1.5 rounded transition-colors">Коричневый</a></li>
 <li><a href="{{ route('catalog.index') }}" class="block text-sm text-orange-600 font-medium hover:text-orange-700 px-2 py-1.5 rounded transition-colors">Все цвета →</a></li>
 </ul>
 </div>
 </div>
 </div>
 </div>
 </div>
 <a href="{{ route('collections.index') }}" class="text-gray-700 font-medium hover:text-orange-600">Коллекции</a>
 <a href="{{ route('catalog.index', ['categories' => ['ceramic-granite']]) }}" class="text-gray-700 font-medium hover:text-orange-600">Керамогранит</a>
 <a href="{{ route('catalog.index', ['categories' => ['ceramic-tile']]) }}" class="text-gray-700 font-medium hover:text-orange-600">Керамическая плитка</a>
 <a href="/contacts" class="text-gray-700 font-medium hover:text-orange-600">Контакты</a>
 </nav>

 <div class="flex items-center gap-2">
 <a href="/cart" class="relative p-2 hover:bg-gray-100 rounded-lg transition-colors group">
 <svg class="w-6 h-6 text-gray-700 group-hover:text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
 </svg>
 <span id="cart-count" class="absolute -top-1 -right-1 bg-orange-500 text-white text-xs w-5 h-5 rounded-full flex items-center justify-center font-medium">0</span>
 </a>
 <a href="https://wa.me/79052050900" target="_blank" class="hidden sm:flex items-center gap-2 px-4 py-2 bg-green-500 hover:bg-green-600 text-white font-medium rounded-lg transition-colors">
 <span class="hidden lg:inline">WhatsApp</span>
 </a>
 </div>
 </div>
 </div>
 </header>

 <main class="min-h-screen">
 @yield('content')
 </main>

 <footer class="bg-white border-t border-gray-200 mt-12">
 <div class="container mx-auto px-4 py-8">
 <div class="grid grid-cols-1 md:grid-cols-3 gap-6 text-center md:text-left">
 <div>
 <h4 class="font-semibold text-gray-900 mb-2">📍 Адрес</h4>
 <p class="text-gray-600 text-sm">Янино-1, Ленинградская область</p>
 </div>
 <div>
 <h4 class="font-semibold text-gray-900 mb-2">🕐 Режим работы</h4>
 <p class="text-gray-600 text-sm">Пн-Пт: 9:00-18:00</p>
 <p class="text-gray-600 text-sm">Сб-Вс: 10:00-16:00</p>
 </div>
 <div>
 <h4 class="font-semibold text-gray-900 mb-2">📞 Контакты</h4>
 <p class="text-gray-600 text-sm">+7 (905) 205-09-00</p>
 </div>
 </div>
 <p class="text-center text-gray-500 text-sm mt-8 pt-6 border-t border-gray-100">&copy; {{ date('Y') }} CERSANIT ЯНИНО. Все права защищены.</p>
 </div>
 </footer>
 @vite('resources/js/app.js')

<script>
// Cart count loader
function loadCartCount() {
    fetch('/cart/count')
        .then(r => r.json())
        .then(data => {
            const el = document.getElementById('cart-count');
            if (el) el.textContent = data.count;
        })
        .catch(() => {});
}
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', loadCartCount);
} else {
    loadCartCount();
}
</script>
@stack('scripts')
</body>
</html>
