import fetch from 'node-fetch';
import { products } from '../lib/products-data.js'; // Note: importing .js from .mjs might need adjustments or we manually list URLs

const SITE_URL = 'https://cersanit-spb.ru';
const INDEXNOW_KEY = '8f2e3e5b12a44b5c8d9e0f1a2b3c4d5e';
const INDEXNOW_KEY_LOCATION = `${SITE_URL}/8f2e3e5b12a44b5c8d9e0f1a2b3c4d5e.txt`;

const staticUrls = [
  '',
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
];

const seoLandingPages = [
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
  '/keramogranit-pod-mramor-spb',
];

// In a real script we would import products, but since it's a large TS file, 
// for this one-off submission we can just extract slugs or use a subset.
// For now, let's just submit the main pages to verify the protocol.

async function submitToIndexNow(urls) {
  const fullUrls = urls.map(url => `${SITE_URL}${url.startsWith('/') ? url : '/' + url}`);
  
  const engines = [
    'https://yandex.com/indexnow',
    'https://www.bing.com/indexnow',
    'https://api.indexnow.org'
  ];

  for (const engine of engines) {
    console.log(`Submitting to ${engine}...`);
    try {
      const response = await fetch(engine, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
          host: 'cersanit-spb.ru',
          key: INDEXNOW_KEY,
          keyLocation: INDEXNOW_KEY_LOCATION,
          urlList: fullUrls
        })
      });
      console.log(`Status for ${engine}: ${response.status} ${response.statusText}`);
    } catch (error) {
      console.error(`Error submitting to ${engine}:`, error);
    }
  }
}

const allUrls = [...staticUrls, ...seoLandingPages];
submitToIndexNow(allUrls);
