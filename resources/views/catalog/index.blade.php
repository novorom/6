@extends('layout')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
    {{-- БОКОВАЯ ПАНЕЛЬ С ФИЛЬТРАМИ --}}
    <aside class="lg:col-span-1">
        <div class="bg-white rounded-lg shadow-sm p-6 sticky top-24">
            <h2 class="text-xl font-bold text-gray-900 mb-6">Фильтры</h2>
            
            <form action="{{ route('catalog.index') }}" method="GET" id="filters-form">
                {{-- Коллекция --}}
                @if($filterOptions['collections']->count() > 0)
                    <div class="mb-6">
                        <h3 class="text-sm font-semibold text-gray-700 mb-3">Коллекция</h3>
                        <div class="space-y-2 max-h-48 overflow-y-auto">
                            @foreach($filterOptions['collections'] as $collection)
                                <label class="flex items-center cursor-pointer hover:bg-gray-50 p-1 rounded">
                                    <input 
                                        type="checkbox" 
                                        name="collection[]" 
                                        value="{{ $collection }}"
                                        {{ in_array($collection, request('collection', [])) ? 'checked' : '' }}
                                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                                        onchange="this.form.submit()"
                                    >
                                    <span class="ml-2 text-sm text-gray-700">{{ $collection }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @endif
                
                {{-- Размер --}}
                @if($filterOptions['formats']->count() > 0)
                    <div class="mb-6">
                        <h3 class="text-sm font-semibold text-gray-700 mb-3">Размер</h3>
                        <div class="space-y-2 max-h-48 overflow-y-auto">
                            @foreach($filterOptions['formats'] as $format)
                                <label class="flex items-center cursor-pointer hover:bg-gray-50 p-1 rounded">
                                    <input 
                                        type="checkbox" 
                                        name="format[]" 
                                        value="{{ $format }}"
                                        {{ in_array($format, request('format', [])) ? 'checked' : '' }}
                                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                                        onchange="this.form.submit()"
                                    >
                                    <span class="ml-2 text-sm text-gray-700">{{ $format }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @endif
                
                {{-- Цвет --}}
                @if($filterOptions['colors']->count() > 0)
                    <div class="mb-6">
                        <h3 class="text-sm font-semibold text-gray-700 mb-3">Цвет</h3>
                        <div class="space-y-2 max-h-48 overflow-y-auto">
                            @foreach($filterOptions['colors'] as $color)
                                <label class="flex items-center cursor-pointer hover:bg-gray-50 p-1 rounded">
                                    <input 
                                        type="checkbox" 
                                        name="color[]" 
                                        value="{{ $color }}"
                                        {{ in_array($color, request('color', [])) ? 'checked' : '' }}
                                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                                        onchange="this.form.submit()"
                                    >
                                    <span class="ml-2 text-sm text-gray-700">{{ $color }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @endif
                
                {{-- Поверхность --}}
                @if($filterOptions['surfaces']->count() > 0)
                    <div class="mb-6">
                        <h3 class="text-sm font-semibold text-gray-700 mb-3">Поверхность</h3>
                        <div class="space-y-2">
                            @foreach($filterOptions['surfaces'] as $surface)
                                <label class="flex items-center cursor-pointer hover:bg-gray-50 p-1 rounded">
                                    <input 
                                        type="checkbox" 
                                        name="surface[]" 
                                        value="{{ $surface }}"
                                        {{ in_array($surface, request('surface', [])) ? 'checked' : '' }}
                                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                                        onchange="this.form.submit()"
                                    >
                                    <span class="ml-2 text-sm text-gray-700">{{ $surface }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @endif
                
                {{-- Применение --}}
                @if($filterOptions['applications']->count() > 0)
                    <div class="mb-6">
                        <h3 class="text-sm font-semibold text-gray-700 mb-3">Применение</h3>
                        <div class="space-y-2">
                            @foreach($filterOptions['applications'] as $application)
                                <label class="flex items-center cursor-pointer hover:bg-gray-50 p-1 rounded">
                                    <input 
                                        type="checkbox" 
                                        name="application[]" 
                                        value="{{ $application }}"
                                        {{ in_array($application, request('application', [])) ? 'checked' : '' }}
                                        class="rounded border-gray-300 text-blue-600 focus:ring-blue-500"
                                        onchange="this.form.submit()"
                                    >
                                    <span class="ml-2 text-sm text-gray-700">{{ $application }}</span>
                                </label>
                            @endforeach
                        </div>
                    </div>
                @endif
                
                {{-- Цена --}}
                @if($filterOptions['price_range']['min'] && $filterOptions['price_range']['max'])
                    <div class="mb-6">
                        <h3 class="text-sm font-semibold text-gray-700 mb-3">Цена, ₽</h3>
                        <div class="space-y-3">
                            <div class="flex gap-2">
                                <input 
                                    type="number" 
                                    name="price_from" 
                                    placeholder="От"
                                    value="{{ request('price_from') }}"
                                    min="{{ $filterOptions['price_range']['min'] }}"
                                    max="{{ $filterOptions['price_range']['max'] }}"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                >
                                <input 
                                    type="number" 
                                    name="price_to" 
                                    placeholder="До"
                                    value="{{ request('price_to') }}"
                                    min="{{ $filterOptions['price_range']['min'] }}"
                                    max="{{ $filterOptions['price_range']['max'] }}"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                >
                            </div>
                            <button 
                                type="submit"
                                class="w-full px-4 py-2 bg-blue-600 text-white text-sm font-medium rounded-lg hover:bg-blue-700 transition"
                            >
                                Применить
                            </button>
                        </div>
                    </div>
                @endif
                
                {{-- Кнопка сброса --}}
                @if(request()->hasAny(['collection', 'format', 'color', 'surface', 'application', 'price_from', 'price_to']))
                    <div class="pt-4 border-t">
                        <a 
                            href="{{ route('catalog.index') }}"
                            class="block w-full text-center px-4 py-2 text-sm text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition"
                        >
                            Сбросить фильтры
                        </a>
                    </div>
                @endif
            </form>
        </div>
    </aside>
    
    {{-- ОСНОВНОЙ КОНТЕНТ --}}
    <main class="lg:col-span-3">
        {{-- Заголовок и сортировка --}}
        <div class="bg-white rounded-lg shadow-sm p-6 mb-6">
            <div class="flex items-center justify-between flex-wrap gap-4">
                <div>
                    <h1 class="text-3xl font-bold text-gray-900">Каталог Cersanit</h1>
                    <p class="text-gray-600 mt-1">
                        Найдено товаров: <strong>{{ $products->total() }}</strong>
                    </p>
                </div>
                
                {{-- Сортировка --}}
                <div class="flex items-center gap-2">
                    <label class="text-sm text-gray-600">Сортировка:</label>
                    <select 
                        name="sort" 
                        onchange="window.location.href = updateQueryParam('sort', this.value)"
                        class="px-4 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    >
                        <option value="popular" {{ request('sort') === 'popular' ? 'selected' : '' }}>
                            Популярные
                        </option>
                        <option value="price_asc" {{ request('sort') === 'price_asc' ? 'selected' : '' }}>
                            Цена: по возрастанию
                        </option>
                        <option value="price_desc" {{ request('sort') === 'price_desc' ? 'selected' : '' }}>
                            Цена: по убыванию
                        </option>
                        <option value="new" {{ request('sort') === 'new' ? 'selected' : '' }}>
                            Новинки
                        </option>
                        <option value="name" {{ request('sort') === 'name' ? 'selected' : '' }}>
                            По названию
                        </option>
                    </select>
                </div>
            </div>
        </div>
        
        {{-- Сетка товаров --}}
        @if($products->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 mb-8">
                @foreach($products as $product)
                    @include('catalog.product-card', ['product' => $product])
                @endforeach
            </div>
            
            {{-- Пагинация --}}
            <div class="bg-white rounded-lg shadow-sm p-6">
                {{ $products->links() }}
            </div>
        @else
            <div class="bg-white rounded-lg shadow-sm p-12 text-center">
                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <h3 class="text-xl font-semibold text-gray-900 mb-2">Товары не найдены</h3>
                <p class="text-gray-600 mb-4">
                    Попробуйте изменить параметры фильтров или 
                    <a href="{{ route('catalog.index') }}" class="text-blue-600 hover:underline">сбросить все фильтры</a>
                </p>
            </div>
        @endif
    </main>
</div>

{{-- SEO-блок с доп. информацией --}}
<section class="mt-12 bg-white rounded-lg shadow-sm p-8">
    <h2 class="text-2xl font-bold text-gray-900 mb-4">Плитка и керамогранит Cersanit</h2>
    <div class="prose max-w-none text-gray-700">
        <p>
            Широкий выбор керамической плитки и керамогранита польского производителя Cersanit. 
            В нашем каталоге представлены разнообразные коллекции для стен и пола, различных форматов, 
            цветов и фактур. Вся продукция в наличии на складе в Москве с возможностью быстрой доставки.
        </p>
        <p>
            Cersanit — один из крупнейших европейских производителей керамической плитки и санитарной керамики. 
            Продукция бренда отличается высоким качеством, современным дизайном и доступными ценами. 
            Мы предлагаем официальную гарантию производителя и профессиональную консультацию по выбору материалов.
        </p>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Функция для обновления query параметров
    function updateQueryParam(key, value) {
        const url = new URL(window.location);
        url.searchParams.set(key, value);
        return url.toString();
    }
</script>
@endpush
