<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="/favicon/favicon-48x48.png" sizes="48x48" />
    <link rel="icon" type="image/svg+xml" href="/favicon/favicon.svg" />
    <link rel="shortcut icon" href="/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Indra" />
    <link rel="manifest" href="/favicon/site.webmanifest" />
    <title>IndraCollective</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')

    @if (request()->headers->get('X-Laravel-Export'))
        <script type="text/javascript">
            (function(c, l, a, r, i, t, y) {
                c[a] = c[a] || function() {
                    (c[a].q = c[a].q || []).push(arguments)
                };
                t = l.createElement(r);
                t.async = 1;
                t.src = "https://www.clarity.ms/tag/" + i;
                y = l.getElementsByTagName(r)[0];
                y.parentNode.insertBefore(t, y);
            })(window, document, "clarity", "script", "okb6xj5brc");
        </script>
    @endif
</head>

<body class="font-sans antialiased dark:bg-slate-900 text-slate-900 dark:text-white ">
    <div
        class="absolute inset-0 h-full bg-gradient-to-r from-blue-900/10 via-white to-amber-100/20 dark:from-teal-400/40 dark:via-slate-900 dark:to-teal-400/40 dark:opacity-5">

    </div>
    <div class="relative">
        <div class="flex flex-col items-center justify-center min-h-screen px-4 py-12 sm:px-6 lg:px-8">
            <div class="max-w-md mb-8 max-h-96">
                <img src="images/ic_logo_portrait_dark.svg" alt="indra logo" class="hidden w-full h-full dark:block">
                <img src="images/ic_logo_portrait.svg" alt="indra logo" class="w-full h-full dark:hidden">
            </div>
            <div>
                <div class="mb-16 prose text-center dark:prose-invert">
                    <h2 class="mb-32 font-medium text-green-600 dark:text-green-400">
                        Open Digital Innovation<br>
                        For a More Beautiful World
                    </h2>

                    <p>
                        Wow, you're early!<br>
                        Follow us on our socials for updates<br>
                        or reach out at <a href="mailto:hello@indracollective.dev"
                            class="font-bold no-underline hover:text-green-500">hello@indracollective.dev</a>
                    </p>
                </div>

                <div class="flex items-center justify-center gap-4">
                    <a href="https://github.com/indracollective" target="_blank">
                        <x-bi-github class="w-8 h-8 opacity-50 hover:opacity-100" />
                    </a>
                    <a href="https://x.com/indracollective" target="_blank">
                        <x-bi-twitter-x class="w-8 h-8 opacity-50 hover:opacity-100" />
                    </a>
                    <a href="https://linkedin.com/in/shea-dawson-4b757719/" target="_blank">
                        <x-bi-linkedin class="w-8 h-8 opacity-50 hover:opacity-100" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
