self.addEventListener("install", e => {
    e.waitUntil(
        caches.open("static").then(cache => {
            return cache.addAll([
                "./",
                "./css/style.css",
                "./css/bootstrap.min.css",
                "./img/hpl.png",
                "./img/logo192.png",
                "./img/logo512.png",
                "./js/jquery.min.js",
                "./js/bootstrap.bundle.min.js"
            ]);
        })
    );
});


self.addEventListener("fetch", e => {
    e.respondWith(
        caches.match(e.request).then(response => {
            return response || fetch(e.request);
        })
    );
});