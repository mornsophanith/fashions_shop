<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Karl Fashion | @yield('title')</title>
        <link rel="icon" href="../../img/core-img/favicon.ico">
        <link rel="stylesheet" href="../css/core-style.css">
        <link rel="stylesheet" href="../css/style.css">
        <link href="../css/responsive.css" rel="stylesheet">
        <script nonce="026ad66e-06c8-4138-89ce-83fd16ef29ad">
            (function(w, d) {
                ! function(a, b, c, d) {
                a[c] = a[c] || {};
                a[c].executed = [];
                a.zaraz = {
                    deferred: [],
                    listeners: []
                };
                a.zaraz.q = [];
                a.zaraz._f = function(e) {
                    return async function() {
                    var f = Array.prototype.slice.call(arguments);
                    a.zaraz.q.push({
                        m: e,
                        a: f
                    })
                    }
                };
                for (const g of ["track", "set", "debug"]) a.zaraz[g] = a.zaraz._f(g);
                a.zaraz.init = () => {
                    var h = b.getElementsByTagName(d)[0],
                    i = b.createElement(d),
                    j = b.getElementsByTagName("title")[0];
                    j && (a[c].t = b.getElementsByTagName("title")[0].text);
                    a[c].x = Math.random();
                    a[c].w = a.screen.width;
                    a[c].h = a.screen.height;
                    a[c].j = a.innerHeight;
                    a[c].e = a.innerWidth;
                    a[c].l = a.location.href;
                    a[c].r = b.referrer;
                    a[c].k = a.screen.colorDepth;
                    a[c].n = b.characterSet;
                    a[c].o = (new Date).getTimezoneOffset();
                    if (a.dataLayer)
                    for (const n of Object.entries(Object.entries(dataLayer).reduce(((o, p) => ({
                        ...o[1],
                        ...p[1]
                        })), {}))) zaraz.set(n[0], n[1], {
                        scope: "page"
                    });
                    a[c].q = [];
                    for (; a.zaraz.q.length;) {
                    const q = a.zaraz.q.shift();
                    a[c].q.push(q)
                    }
                    i.defer = !0;
                    for (const r of [localStorage, sessionStorage]) Object.keys(r || {}).filter((t => t.startsWith("_zaraz_"))).forEach((s => {
                    try {
                        a[c]["z_" + s.slice(7)] = JSON.parse(r.getItem(s))
                    } catch {
                        a[c]["z_" + s.slice(7)] = r.getItem(s)
                    }
                    }));
                    i.referrerPolicy = "origin";
                    i.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(JSON.stringify(a[c])));
                    h.parentNode.insertBefore(i, h)
                };
                ["complete", "interactive"].includes(b.readyState) ? zaraz.init() : a.addEventListener("DOMContentLoaded", zaraz.init)
                }(w, d, "zarazData", "script");
            })(window, document);
        </script>
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        @include("layouts.web-app.side-menu")
        <div id="wrapper">
            @if (session('success'))
                <div class="alert alert-success">
                    <strong>Success!</strong>
                    <span>{{ session('success') }}</span>
                </div>
            @endif

            @include("layouts.web-app.header")
            @yield("content")
            @include("layouts.web-app.footer")
        </div>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <!-- sweet alert  -->
        <script src="../js/jquery/jquery-2.2.4.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/plugins.js"></script>
        <script src="../js/active.js"></script>
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());
            gtag('config', 'UA-23581568-13');
        </script>
        <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v8b253dfea2ab4077af8c6f58422dfbfd1689876627854" integrity="sha512-bjgnUKX4azu3dLTVtie9u6TKqgx29RBwfj3QXYt5EKfWM/9hPSAI/4qcV5NACjwAo8UtTeWefx6Zq5PHcMm7Tg==" data-cf-beacon='{"rayId":"81126e66cf51f87c","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.8.0","si":100}' crossorigin="anonymous"></script>
        @yield('scripts')
    </body>
</html>