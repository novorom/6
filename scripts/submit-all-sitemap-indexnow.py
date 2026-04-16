import requests
import xml.etree.ElementTree as ET
import json

SITE_URL = 'https://cersanit-spb.ru'
SITEMAP_URL = f'{SITE_URL}/sitemap.xml'
INDEXNOW_KEY = '8f2e3e5b12a44b5c8d9e0f1a2b3c4d5e'
INDEXNOW_KEY_LOCATION = f'{SITE_URL}/{INDEXNOW_KEY}.txt'

def get_urls_from_sitemap(url):
    print(f"Fetching sitemap from {url}...")
    response = requests.get(url)
    if response.status_code != 200:
        print(f"Failed to fetch sitemap: {response.status_code}")
        return []
    
    # Remove XML namespaces to simplify parsing
    content = response.text
    root = ET.fromstring(content)
    
    # Different sitemaps might have namespaces, so we handle both
    urls = []
    # Standard namespace used by Next.js sitemap
    ns = {'ns': 'http://www.sitemaps.org/schemas/sitemap/0.9'}
    
    for url_tag in root.findall('.//ns:url/ns:loc', ns):
        urls.append(url_tag.text)
        
    # If no URLs found with namespace, try without
    if not urls:
        for url_tag in root.findall('.//url/loc'):
            urls.append(url_tag.text)
            
    print(f"Found {len(urls)} URLs in sitemap.")
    return urls

def submit_to_indexnow(urls):
    if not urls:
        print("No URLs to submit.")
        return

    payload = {
        "host": "cersanit-spb.ru",
        "key": INDEXNOW_KEY,
        "keyLocation": INDEXNOW_KEY_LOCATION,
        "urlList": urls
    }
    
    headers = {'Content-Type': 'application/json; charset=utf-8'}
    engines = [
        'https://yandex.com/indexnow',
        'https://www.bing.com/indexnow',
        'https://api.indexnow.org'
    ]
    
    for engine in engines:
        print(f"Submitting {len(urls)} URLs to {engine}...")
        try:
            response = requests.post(engine, data=json.dumps(payload), headers=headers)
            print(f"Status for {engine}: {response.status_code} {response.reason}")
        except Exception as e:
            print(f"Error submitting to {engine}: {e}")

if __name__ == "__main__":
    urls = get_urls_from_sitemap(SITEMAP_URL)
    # Batch if too many, but IndexNow supports up to 10,000 URLs per post
    submit_to_indexnow(urls)
