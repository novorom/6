
import json

missing_data = [
    # Botanica
    {
        "id": "20001",
        "name": "Керамогранит Cersanit Botanica коричневый 42x42",
        "slug": "keramogranit-cersanit-botanica-korichnevyy-42x42",
        "brand": "Cersanit",
        "collection": "Botanica",
        "product_type": "Керамогранит",
        "format": "42x42",
        "color": "коричневый",
        "price_retail": round(987 * 0.88),
        "main_image": "https://pvi.cersanit.ru/upload/uf/58f/BN4R112.jpg",
        "unit": "м²",
        "sqm_per_box": 1.41,
        "surface": "матовая"
    },
    # Haiku
    {
        "id": "20002",
        "name": "Плитка Cersanit Haiku серая 25x75",
        "slug": "plitka-cersanit-haiku-seraya-25x75",
        "brand": "Cersanit",
        "collection": "Haiku",
        "product_type": "Плитка",
        "format": "25x75",
        "color": "серый",
        "price_retail": round(1440 * 0.88),
        "main_image": "https://pvi.cersanit.ru/upload/uf/91c/HIU091.jpg",
        "unit": "м²",
        "sqm_per_box": 1.31,
        "surface": "матовая"
    },
    {
        "id": "20003",
        "name": "Плитка Cersanit Haiku серая светлая 25x75",
        "slug": "plitka-cersanit-haiku-seraya-svetlaya-25x75",
        "brand": "Cersanit",
        "collection": "Haiku",
        "product_type": "Плитка",
        "format": "25x75",
        "color": "светло-серый",
        "price_retail": round(1440 * 0.88),
        "main_image": "https://pvi.cersanit.ru/upload/uf/91c/HIU521.jpg",
        "unit": "м²",
        "sqm_per_box": 1.31,
        "surface": "матовая"
    },
    # Milton
    {
        "id": "20004",
        "name": "Керамогранит Cersanit Milton серый 29,8x29,8",
        "slug": "keramogranit-cersanit-milton-seryy-30x30",
        "brand": "Cersanit",
        "collection": "Milton",
        "product_type": "Керамогранит",
        "format": "30x30",
        "color": "серый",
        "price_retail": round(990 * 0.88),
        "main_image": "https://pvi.cersanit.ru/upload/uf/d7a/ML4A093.jpg",
        "unit": "м²",
        "sqm_per_box": 1.42,
        "surface": "матовая"
    },
    {
        "id": "20005",
        "name": "Ступень Cersanit Milton серая 29,8x29,8",
        "slug": "stupen-cersanit-milton-seraya-30x30",
        "brand": "Cersanit",
        "collection": "Milton",
        "product_type": "Ступень",
        "format": "30x30",
        "color": "серый",
        "price_retail": round(1190 * 0.88),
        "main_image": "https://pvi.cersanit.ru/upload/uf/d7a/ML4A093.jpg",
        "unit": "шт.",
        "pieces_per_box": 10,
        "surface": "матовая"
    },
    # Studio
    {
        "id": "20006",
        "name": "Керамогранит Cersanit Studio светло-серый 59,8x59,8",
        "slug": "keramogranit-cersanit-studio-svetlo-seryy-60x60",
        "brand": "Cersanit",
        "collection": "Studio",
        "product_type": "Керамогранит",
        "format": "60x60",
        "color": "светло-серый",
        "price_retail": round(1460 * 0.88),
        "main_image": "https://pvi.cersanit.ru/upload/uf/0f8/TU6U522D.jpg",
        "unit": "м²",
        "sqm_per_box": 1.43,
        "rectified": True,
        "surface": "матовая"
    },
    # Street
    {
        "id": "20007",
        "name": "Керамогранит Cersanit Street серый 42x42",
        "slug": "keramogranit-cersanit-street-seryy-42x42",
        "brand": "Cersanit",
        "collection": "Street",
        "product_type": "Керамогранит",
        "format": "42x42",
        "color": "серый",
        "price_retail": round(1440 * 0.88),
        "main_image": "https://pvi.cersanit.ru/upload/uf/7e2/ST4R092.jpg",
        "unit": "м²",
        "sqm_per_box": 1.41,
        "surface": "матовая"
    },
    # Wonderstone
    {
        "id": "20008",
        "name": "Керамогранит Cersanit Wonderstone антрацит 59,8x59,8",
        "slug": "keramogranit-cersanit-wonderstone-antratsit-60x60",
        "brand": "Cersanit",
        "collection": "Wonderstone",
        "product_type": "Керамогранит",
        "format": "60x60",
        "color": "антрацит",
        "price_retail": round(2040 * 0.88),
        "main_image": "https://pvi.cersanit.ru/upload/uf/6d7/WS6U402D.jpg",
        "unit": "м²",
        "sqm_per_box": 1.43,
        "rectified": True,
        "surface": "матовая"
    },
    # Vegas
    {
        "id": "20009",
        "name": "Плитка Cersanit Vegas бежевая 25x35",
        "slug": "plitka-cersanit-vegas-bezhevaya-25x35",
        "brand": "Cersanit",
        "collection": "Vegas",
        "product_type": "Плитка",
        "format": "25x35",
        "color": "бежевый",
        "price_retail": round(981 * 0.88),
        "main_image": "https://pvi.cersanit.ru/upload/uf/a0c/VG01.jpg",
        "unit": "м²",
        "sqm_per_box": 1.4,
        "surface": "глянцевая"
    },
    # Glory / Soul / Marmo samples
    {
        "id": "20010",
        "name": "Плитка Cersanit Glory бежевая 30x60",
        "slug": "plitka-cersanit-glory-bezhevaya-30x60",
        "brand": "Cersanit",
        "collection": "Glory",
        "product_type": "Плитка",
        "format": "30x60",
        "color": "бежевый",
        "price_retail": round(1540 * 0.88),
        "main_image": "https://pvi.cersanit.ru/upload/uf/1c2/GL01.jpg",
        "unit": "м²",
        "sqm_per_box": 1.44,
        "surface": "матовая"
    },
    {
        "id": "20011",
        "name": "Керамогранит Cersanit Marmo серый 42x42",
        "slug": "keramogranit-cersanit-marmo-seryy-42x42",
        "brand": "Cersanit",
        "collection": "Marmo",
        "product_type": "Керамогранит",
        "format": "42x42",
        "color": "серый",
        "price_retail": round(1440 * 0.88),
        "main_image": "https://pvi.cersanit.ru/upload/uf/2b3/MM09.jpg",
        "unit": "м²",
        "sqm_per_box": 1.41,
        "surface": "матовая"
    }
]

def format_product(p):
    return f"""  {{
    id: "{p['id']}",
    name: "{p['name']}",
    slug: "{p['slug']}",
    brand: "{p['brand']}",
    collection: "{p['collection']}",
    product_type: "{p['product_type']}",
    format: "{p['format']}",
    color: "{p['color']}",
    price_retail: {p['price_retail']},
    price_official: {round(p['price_retail'] / 0.88)},
    main_image: "{p['main_image']}",
    images: ["{p['main_image']}"],
    unit: "{p['unit']}",
    sqm_per_box: {p.get('sqm_per_box', 'undefined')},
    pieces_per_box: {p.get('pieces_per_box', 'undefined')},
    surface: "{p.get('surface', 'матовая')}",
    stock_yanino: 50,
    stock_factory: 200,
    is_new: True,
    rectified: {p.get('rectified', False)},
  }},"""

for p in missing_data:
    print(format_product(p))

