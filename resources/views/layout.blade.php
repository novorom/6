<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'CERSANIT ЯНИНО - Официальный дилер в Санкт-Петербурге')</title>
    <meta name="description" content="@yield('meta_description', 'Керамическая плитка и керамогранит Cersanit со скидкой 20% от розницы. Склад в Янино, доставка по СПб и области.')">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    {{-- @vite('resources/css/app.css') --}}

    {{-- SEO JSON-LD Schema for the Organization --}}
    @include('components.seo.organization-schema')
</head>
<body class="antialiased bg-gray-50 text-gray-800">
    <header class="bg-white shadow-md">
        <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-gray-800">🏆 CERSANIT ЯНИНО</a>
            <div>
                <a href="/catalog" class="text-gray-600 hover:text-gray-800 px-3">Каталог</a>
                <a href="https://wa.me/79052050900" target="_blank" class="text-gray-600 hover:text-gray-800 px-3">WhatsApp</a>
                <a href="tel:+79052050900" class="text-gray-600 hover:text-gray-800 px-3">+7 (905) 205-09-00</a>
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="bg-gray-100 mt-12">
        <div class="container mx-auto px-4 py-8 text-center text-gray-600">
            <p>📍 Склад: Янино-1, Ленинградская область</p>
            <p>🕐 Пн-Пт: 9:00-18:00, Сб-Вс: 10:00-16:00</p>
            <p class="mt-4">&copy; {{ date('Y') }} CERSANIT ЯНИНО. Все права защищены.</p>
        </div>
    </footer>

    {{-- @vite('resources/js/app.js') --}}
    @stack('scripts')
</body>
</html>
