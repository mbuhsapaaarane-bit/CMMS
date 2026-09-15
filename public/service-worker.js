<<<<<<< HEAD
const CACHE_NAME = 'cmms-pwa-v4';
const STATIC_ASSETS = [
  '/manifest.webmanifest',
  '/icon.png',
  '/icons/icon-192x192.png',
  '/icons/icon-512x512.png',
  'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap',
  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css'
];

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME).then(cache => cache.addAll(STATIC_ASSETS)).catch(() => {})
  );
  self.skipWaiting();
});

self.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys()
      .then(keys => Promise.all(
        keys.filter(key => key !== CACHE_NAME).map(key => caches.delete(key))
      ))
      .then(() => self.clients.claim())
  );
});

self.addEventListener('fetch', event => {
  const { request } = event;

  // Only handle GET requests; never cache API calls (POST, etc.)
  if (request.method !== 'GET') return;

  // Page navigations: network-first so users always get the latest version
  if (request.mode === 'navigate') {
    event.respondWith(
      fetch(request)
        .then(response => {
          if (response.ok) {
            const copy = response.clone();
            caches.open(CACHE_NAME).then(cache => cache.put(new Request('/'), copy));
          }
          return response;
        })
        .catch(() => caches.match('/'))
    );
    return;
  }

  // IMPORTANT: never intercept API/JSON requests (e.g. /data). They were
  // previously cached cache-first, which served STALE responses: user lists
  // did not refresh after add/delete, and after logging in as another user
  // the app still showed the previous user. API calls must always hit the
  // network.
  let url;
  try {
    url = new URL(request.url);
  } catch (e) {
    return;
  }
  if (url.origin !== self.location.origin) return;
  if (!STATIC_ASSETS.includes(url.pathname)) return;

  // Known static assets: cache-first with network fallback
  event.respondWith(
    caches.match(request).then(cached => cached || fetch(request).then(response => {
      if (response.ok) {
        const copy = response.clone();
        caches.open(CACHE_NAME).then(cache => cache.put(request, copy));
      }
      return response;
    }))
  );
});
=======
const CACHE_NAME = 'cmms-pwa-v4';
const STATIC_ASSETS = [
  '/manifest.webmanifest',
  '/icon.png',
  '/icons/icon-192x192.png',
  '/icons/icon-512x512.png',
  'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap',
  'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css'
];

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME).then(cache => cache.addAll(STATIC_ASSETS)).catch(() => {})
  );
  self.skipWaiting();
});

self.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys()
      .then(keys => Promise.all(
        keys.filter(key => key !== CACHE_NAME).map(key => caches.delete(key))
      ))
      .then(() => self.clients.claim())
  );
});

self.addEventListener('fetch', event => {
  const { request } = event;

  // Only handle GET requests; never cache API calls (POST, etc.)
  if (request.method !== 'GET') return;

  // Page navigations: network-first so users always get the latest version
  if (request.mode === 'navigate') {
    event.respondWith(
      fetch(request)
        .then(response => {
          if (response.ok) {
            const copy = response.clone();
            caches.open(CACHE_NAME).then(cache => cache.put(new Request('/'), copy));
          }
          return response;
        })
        .catch(() => caches.match('/'))
    );
    return;
  }

  // IMPORTANT: never intercept API/JSON requests (e.g. /data). They were
  // previously cached cache-first, which served STALE responses: user lists
  // did not refresh after add/delete, and after logging in as another user
  // the app still showed the previous user. API calls must always hit the
  // network.
  let url;
  try {
    url = new URL(request.url);
  } catch (e) {
    return;
  }
  if (url.origin !== self.location.origin) return;
  if (!STATIC_ASSETS.includes(url.pathname)) return;

  // Known static assets: cache-first with network fallback
  event.respondWith(
    caches.match(request).then(cached => cached || fetch(request).then(response => {
      if (response.ok) {
        const copy = response.clone();
        caches.open(CACHE_NAME).then(cache => cache.put(request, copy));
      }
      return response;
    }))
  );
});
>>>>>>> bc60b796583544d0723aed639250b1377c2fca05
