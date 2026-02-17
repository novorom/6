@if(config('app.env') === 'production')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "CERSANIT ЯНИНО",
    "description": "Официальный дилер Cersanit в Санкт-Петербурге. Керамическая плитка и керамогранит со скидкой 20% от розницы. Склад в Янино.",
    "url": "{{ url('/') }}",
    "logo": "{{ asset('images/logo.png') }}",
    "telephone": "+79052050900",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "Янино-1",
        "addressLocality": "Ленинградская область",
        "addressCountry": "RU"
    },
    "openingHours": [
        "Mo-Fr 09:00-18:00",
        "Sa-Su 10:00-16:00"
    ],
    "priceRange": "₽₽",
    "sameAs": [
        "https://wa.me/79052050900",
        "https://t.me/flyrom"
    ]
}
</script>
@endif
