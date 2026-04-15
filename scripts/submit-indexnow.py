import requests
import json

SITE_URL = 'https://cersanit-spb.ru'
INDEXNOW_KEY = '8f2e3e5b12a44b5c8d9e0f1a2b3c4d5e'
INDEXNOW_KEY_LOCATION = f'{SITE_URL}/8f2e3e5b12a44b5c8d9e0f1a2b3c4d5e.txt'

urls = [
    '/',
    '/catalog',
    '/collections',
    '/delivery',
    '/about',
    '/contacts',
    '/reviews',
    '/spb',
    '/magazin-plitki-spb',
    '/dostavka-plitki-spb',
    '/plitka-yanino-spb',
    '/keramicheskaya-plitka-spb',
    '/keramogranit-spb',
    '/plitka-dlya-vannoj-spb',
    '/mozaika-spb',
    '/plitka-pod-derevo-spb',
    '/plitka-pod-mramor-spb',
    '/plitka-pod-beton-spb',
    '/plitka-pod-kamen-spb',
    '/plitka-dlya-kuhni-spb',
    '/plitka-dlya-prihozhej-spb',
    '/plitka-dlya-balkona-spb',
    '/keramogranit-60x120-spb',
    '/keramogranit-60x60-spb',
    '/plitka-30x60-spb',
    '/keramogranit-pod-derevo-spb',
    '/keramogranit-pod-mramor-spb'
]

full_urls = [f"{SITE_URL}{url}" for url in urls]

engines = [
    'https://yandex.com/indexnow',
    'https://www.bing.com/indexnow',
    'https://api.indexnow.org'
]

def submit():
    payload = {
        "host": "cersanit-spb.ru",
        "key": INDEXNOW_KEY,
        "keyLocation": INDEXNOW_KEY_LOCATION,
        "urlList": full_urls
    }
    
    headers = {'Content-Type': 'application/json; charset=utf-8'}
    
    for engine in engines:
        print(f"Submitting to {engine}...")
        try:
            response = requests.post(engine, data=json.dumps(payload), headers=headers)
            print(f"Status for {engine}: {response.status_code} {response.reason}")
        except Exception as e:
            print(f"Error submitting to {engine}: {e}")

if __name__ == "__main__":
    submit()
