<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    @googlefonts
    @vite('resources/css/app.css')
</head>
<body class="font-sans antialiased dark:bg-slate-900 text-slate-900 dark:text-white ">
<div
    class="h-full absolute inset-0 bg-gradient-to-r from-blue-900/10 via-white to-amber-100/20 dark:from-teal-400/40 dark:via-slate-900 dark:to-teal-400/40 dark:opacity-5">

</div>
<div class="relative">
    <div class="flex flex-col items-center justify-center min-h-screen px-4 py-12 sm:px-6 lg:px-8">
        <div class="max-w-md max-h-96 mb-8">
            <img src="images/ic_logo_portrait_dark.svg" alt="indra logo" class="w-full h-full hidden dark:block">
            <img src="images/ic_logo_portrait.svg" alt="indra logo" class="w-full h-full dark:hidden">
        </div>
        <div>
            <div class="prose dark:prose-invert text-center mb-16">
                <h2 class="text-green-600 dark:text-green-400 font-medium mb-32">
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
                    <x-bi-github class="w-8 h-8 opacity-50 hover:opacity-100"/>
                </a>
                <a href="https://x.com/livesourcenz" target="_blank">
                    <x-bi-twitter-x class="w-8 h-8 opacity-50 hover:opacity-100"/>
                </a>
                <a href="https://linkedin.com/in/shea-dawson-4b757719/" target="_blank">
                    <x-bi-linkedin class="w-8 h-8 opacity-50 hover:opacity-100"/>
                </a>
            </div>


        </div>
    </div>
</div>
</body>
</html>
